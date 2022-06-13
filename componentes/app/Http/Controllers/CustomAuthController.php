<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            Session::put("id", $user->id);
            Session::put("rol", $user->rol);
            return redirect()->intended('/')
                ->with('succes', 'Se ha logueado correctemente.');
        }
        return redirect("login")->with('error', 'El usuario o la contraseña son incorrectas.');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('/');
        }
        return redirect("login")->withSuccess('are not allowed to access');
    }

    public function recuperarPass()
    {
        return view("auth.recuperarPass");
    }


    public function comprobarCorreo(Request $request)
    {
        $user = User::where('email', '=', $request->first());
        if($user) {
            return redirect()->intended('login')
                ->with('succes', 'Se ha logueado correctemente.');
        } if(!$user)
            return redirect("recuperarPass")->with('error', 'El correo introducido no se encuentra en la base de datos.');
    }



    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    
}
