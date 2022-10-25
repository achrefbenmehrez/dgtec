<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
            return redirect()->intended('dashboard')
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
        dd($request);

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'login' => 'required',
            'email' => 'required',
            'password' => 'required|email|unique:users',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'telephone' => $data['telephone'],
        'email' => $data['email'],
        'password' => FacadesHash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('connexion');
    }
}
