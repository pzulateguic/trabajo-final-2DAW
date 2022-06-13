<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
 
class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::get();
        $clientes = Clientes::paginate(5);
        return view('clientes.index', ['clientes' => $clientes]);
    }
	
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        if ($request->has('ID'))
            $cliente = Clientes::find($request->get('ID'));
        else
            $cliente = new Clientes;
        $cliente->Nombre = $request->get('NOMBRE');
        $cliente->save();
        return redirect('clientes');
    }
    public function edit($id)
    {
        $clientes = Clientes::find($id);
        return view('clientes.edit', ['cliente' => $clientes]);

    }

    public function show($id)
    {
        $clientes = Clientes::find($id);
        return view('clientes.show', ['cliente' => $clientes]);
    }
    public function delete($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        return redirect('clientes');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
