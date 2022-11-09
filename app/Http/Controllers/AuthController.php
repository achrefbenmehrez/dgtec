<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\AdresseFacturation;
use App\Models\AdresseLivraison;
use App\Models\Panier;
use App\Models\Societe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.connexion');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function inscription(Request $request)
    {
        return view('auth.inscription');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postConnexion(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('login', 'password');
        if (Auth::attempt($credentials)) {
            $cart = Panier::where('user_id', auth()->user()->id)->get();

            if (count($cart) > 0) {
                session()->put('cart', $cart[0]['donnees_panier']);
            }
            return redirect()->intended('espace-client')
                ->with('message', 'You have Successfully logged in');
        }

        return redirect()->back()->with('error', 'Oops! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postInscription(RegisterRequest $request)
    {
        $data = $request->all();

        $adresseFacturation = AdresseFacturation::create([
            'destinataire' => $data['billing_address_name'],
            'adresse' => $data['billing_address_address1'],
            'complement' => $data['billing_address_address2'] && null,
            'code_postal' => $data['billing_address_postcode'],
            'ville' => $data['billing_address_city'],
            'pays' => $data['billing_address_country'],
        ]);

        $data['factures'] = '';
        $data['form_company_rne'] = false;

        if ($request->file('form_company_rne')) {
            $imageName = time() . '.' . $request->file('form_company_rne')->extension();

            $request->form_company_rne->move(public_path('images/register'), $imageName);
            $data['form_company_rne'] = $imageName;
        }

        $societe = Societe::create([
            'raisonSociale' => $data['company_name'],
            'nomCommercial' => $data['business_name'],
            'numTel' => $data['company_phone'],
            'siteWeb' => $data['company_website'] && null,
            'identifiantUnique' => $data['company_business_id'],
            'rne' => $data['form_company_rne'],
            'formeJuridique' => $data['company_legal_status'] && null,
            'nomComptable' => $data['company_accountant_name'] && null,
            'emailComptable' => $data['company_accountant_email'] && null,
            'formatPapier' => $data['factures'] == '1' ? true : false,
        ]);

        $user = User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => FacadesHash::make($data['password']),
            'societe_id' => $societe->id,
            'adresse_facturation_id' => $adresseFacturation->id,
        ]);

        $user->assignRole('client');

        if ($data['delivery_address_name'] && $data['delivery_address_address1'] && $data['delivery_address_address2'] && $data['delivery_address_postcode'] && $data['delivery_address_city'] && $data['delivery_address_country']) {
            AdresseLivraison::create([
                'destinataire' => $data['delivery_address_name'],
                'adresse' => $data['delivery_address_address1'],
                'complement' => $data['delivery_address_address2'] && null,
                'code_postal' => $data['delivery_address_postcode'],
                'ville' => $data['delivery_address_city'],
                'pays' => $data['delivery_address_country'],
                'user_id' => $user->id
            ]);
        }

        return redirect("connexion")->withSuccess('Great! You have Successfully created an account');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("connexion")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        session()->flush();

        return Redirect('connexion')->withSuccess('You are now Logged out');
    }
}
