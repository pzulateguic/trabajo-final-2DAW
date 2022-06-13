<?php

namespace App\Http\Controllers;

use App\Models\Aplicaciones;
use App\Models\Componentes;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

/**
 * Controlador CRUD de aplicaciones
 */
class AplicacionesController extends Controller
{
    
    /**
     * Función para devolver el nombre de una aplicación, dado su id como parámetro
     */
    public function ajaxApp($id){
        $aplicaciones = Aplicaciones::find($id);
        if ($aplicaciones != null)
        return $aplicaciones->Nombre;
        else
        return"";
    }


    public function index()
    {
        $aplicaciones = Aplicaciones::paginate(5);
        
        return view('aplicaciones.index', ['aplicaciones' => $aplicaciones]);
        
    }
	
    /**
     * Función para crear nueva aplicación. 
     */
    public function create()
    {
        return view('aplicaciones.create');
    }
 /**
     * Función para guardar nueva aplicación. 
     */
    public function store(Request $request)
    {
        if ($request->has('ID'))
            $aplicaciones = Aplicaciones::find($request->get('ID'));
        else
            $aplicaciones = new Aplicaciones;
        $aplicaciones->Nombre = $request->get('NOMBRE');
        $aplicaciones->save();
        return redirect('aplicaciones');
    }
     /**
     * Función para editar nueva aplicación. 
     */
    public function edit($id)
    {
        $aplicaciones = Aplicaciones::find($id);
        return view('aplicaciones.edit', ['aplicaciones' => $aplicaciones]);

    }
     /**
     * Función para mostrar nueva aplicación. 
     */

    public function show($id)
    {
        $aplicaciones = Aplicaciones::find($id);
        return view('aplicaciones.show', ['aplicaciones' => $aplicaciones]);
    }
     /**
     * Función para crear eliminar aplicación. 
     */
    public function delete($id)
    {
        $caplicaciones = Aplicaciones::find($id);

        if ($caplicaciones != null)
            $componentes = Componentes::where("idaplicacion",$caplicaciones->id)->first();
        
        if ($componentes != null)
            return redirect('aplicaciones')->with('error','No se puede borrar una aplicacion asociada a componentes');   
        else
        {
            $caplicaciones->delete();
            return redirect('aplicaciones');
        }
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}

