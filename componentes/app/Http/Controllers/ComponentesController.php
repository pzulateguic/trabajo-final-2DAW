<?php

namespace App\Http\Controllers;

use App\Models\ActualizacionesComponentes;
use App\Models\Aplicaciones;
use App\Models\Componentes;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
        // unir tablas

    public function index()
    {
        //$componentes = Componentes::get();
        $componentes = Componentes::join(Aplicaciones::getTableName(), Componentes::getTableName() . '.idaplicacion', Aplicaciones::getTableName() . '.id')
            ->select(
                Componentes::getTableName() . '.id',
                Componentes::getTableName() . '.Nombre',
                Componentes::getTableName() . '.idaplicacion',
                Aplicaciones::getTableName() . '.Nombre as NombreAplicacion'
            )
            ->paginate(5);
        //dd($componentes);
        return view('componentes.index', ['componentes' => $componentes]);
    }

    // funcion crear

    public function create()
    {
        $aplicaciones = Aplicaciones::get();
        return view('componentes.create', ['aplicaciones' => $aplicaciones]);
    }
    
    //  funcion de almacenamiento
    public function store(Request $request)
    {
        if ($request->has('ID'))
            $componentes = Componentes::find($request->get('ID'));
        else
            $componentes = new Componentes;
        $componentes->Nombre = $request->get('NOMBRE');
        $componentes->observaciones = $request->get('observaciones');

        $componentes->idaplicacion = $request->get('aplicacion');
        $componentes->save();
        return redirect('componentes');
    }
    // funcion de editar
    public function edit($id)
    {
        $componentes = Componentes::find($id);
        $aplicaciones = Aplicaciones::get();
        return view('componentes.edit', ['componentes' => $componentes, 'aplicaciones' => $aplicaciones]);
    }
    //  funcion para mostrar
    public function show($id)
    {
        $componentes = Componentes::find($id);
        $aplicacion = Aplicaciones::find($componentes->idaplicacion);
        //dd($aplicacion);
        // $componentes = Componentes::join(Aplicaciones::getTableName());
        // $aplicaciones = Aplicaciones::get();
        return view('componentes.show', ['componentes' => $componentes, 'aplicacion' => $aplicacion]);
    }
     
    // funcion borrar
   
    // -------------------------------------------------------------------------------------------------------------------------
  public function delete($id)
     {
         $componentes = Componentes::find($id);

         if ($componentes != null)
             $actualizacionesComponentes = ActualizacionesComponentes::where("idcomponente",$componentes->id)->first();
        
         if ($actualizacionesComponentes != null)
             return redirect('Componentes')->with('error','No se puede borrar un componente asociado a una actualización');   
         else
         {
             $componentes->delete();
             return redirect('componentes');
         }
     }   
    //  cancellaccess
     public function __construct()
     {
         $this->middleware('auth');
     } 
}
   

