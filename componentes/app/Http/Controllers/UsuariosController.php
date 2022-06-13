<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
	
	public function index()
    {
        $usuarios = User::get();
        $usuarios = User::paginate(5);

        return view('usuarios.index', ['usuarios' => $usuarios]);

    }
	
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        if ($request->has('ID'))
            $usuario = User::find($request->get('ID'));
        else
            $usuario = new User;
        $usuario->name = $request->get('NOMBRE');
        $usuario->apellido = $request->get('APELLIDO');
        $usuario->email = $request->get('EMAIL');
        $usuario->rol = $request->get('ROL');
        $usuario->password = Hash::make('1234');
        /*
        if ($request->get('ACTIVO') == "on")
            $usuario->Activo = 1;
        else
            $usuario->Activo = 0;
*/
        $usuario->save();
        return redirect('usuarios');
    }

    public function storepass(Request $request)
    {
        //dd($request);
        if ($request->has('ID'))
            $usuario = User::find($request->get('ID'));
        else
            $usuario = new User;
       
        $usuario->password = Hash::make($request->get('password'));
        //$usuario->password = Hash::make($request->get('cpassword'));
        $usuario->save();
        //dd($usuario);
        return redirect('usuarios');
    }
		
    public function edit($id)
    {
        $usuarios = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuarios]);

    }

    public function show($id)
    {
        $usuarios = User::find($id);
        return view('usuarios.show', ['user' => $usuarios]);
    }
    public function delete($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return redirect('usuarios');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
