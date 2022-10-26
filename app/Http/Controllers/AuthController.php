<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdresseFacturation;
use App\Models\AdresseLivraison;
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
    public function inscription()
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
            return redirect()->intended('espace-client')
                ->withSuccess('You have Successfully logged in');
        }

        return redirect("connexion")->withSuccess('Oops! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postInscription(Request $request)
    {

        $data = $request->all();

        $adresseLivraison = AdresseLivraison::create([
            'destinataire' => $data['delivery_address_name'],
            'adresse' => $data['delivery_address_address1'],
            'complement' => $data['delivery_address_address2'],
            'code_postal' => $data['delivery_address_postcode'],
            'ville' => $data['delivery_address_city'],
            'pays' => $data['delivery_address_country'],
        ]);

        $adresseFacturation = AdresseFacturation::create([
            'destinataire' => $data['billing_address_name'],
            'adresse' => $data['billing_address_address1'],
            'complement' => $data['billing_address_address2'],
            'code_postal' => $data['billing_address_postcode'],
            'ville' => $data['billing_address_city'],
            'pays' => $data['billing_address_country'],
        ]);

        if ($request->file('form_company_kbis')) {
            $imageName = time() . '.' . $request->file('form_company_kbis')->extension();

            $request->form_company_kbis->move(public_path('images'), $imageName);
            $data['form_company_kbis'] = $imageName;
        }

        $societe = Societe::create([
            'raisonSociale' => $data['company_name'],
            'nomCommercial' => $data['business_name'],
            'numTel' => $data['company_phone'],
            'siteWeb' => $data['company_website'],
            'siret' => $data['company_business_id'],
            'kbis' => $data['form_company_kbis'],
            'formeJuridique' => $data['company_legal_status'],
            'ape' => $data['company_ape'],
            'nomComptable' => $data['company_accountant_name'],
            'emailComptable' => $data['company_accountant_email'],
            'formatPapier' => $data['factures'] == 'on' ? true : false,
        ]);

        $check = User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => FacadesHash::make($data['password']),
            'societe_id' => $societe->id,
            'adresse_livraison_id' => $adresseLivraison->id,
            'adresse_facturation_id' => $adresseFacturation->id,
        ]);

        return redirect("connexion")->withSuccess('Great! You have Successfully logged in');
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

        return Redirect('connexion');
    }
}
