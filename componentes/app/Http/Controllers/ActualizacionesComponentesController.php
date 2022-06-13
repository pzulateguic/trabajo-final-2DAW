<?php

namespace App\Http\Controllers;

use App\Models\ActualizacionesComponentes;
use App\Models\Componentes;
use App\Models\Aplicaciones;
use Illuminate\Http\Request;

class ActualizacionesComponentesController extends Controller
{

    /**
     * Función para devolver el nommbre de un componente, dado su id como parámetro
     */
    public function ajaxApp($id)
    {
        $actualizacionesComponentes = ActualizacionesComponentes::find($id);
        if ($actualizacionesComponentes != null)
            return $actualizacionesComponentes->Nombre;
        else
            return "";
    }


    public function index(Request $request)
    // filtro de busqueda nombre
    {
        $nombreb = "";
        $aplicacionb = "";

        if ($request->has('NombreB'))
            $nombreb = $request->get('NombreB');
        
        if ($request->has('AplicacionB'))
            $aplicacionb = $request->get('AplicacionB');
        
        $actualizacionesComponentes = ActualizacionesComponentes::Join(Componentes::getTableName(),
            ActualizacionesComponentes::getTableName() . '.idcomponente',
            Componentes::getTableName() . '.id'
        )
        ->Join(Aplicaciones::getTableName(),
            Componentes::getTableName() . '.idaplicacion',
            Aplicaciones::getTableName() . '.id'
        )
            ->select(
                ActualizacionesComponentes::getTableName() . '.id',
                ActualizacionesComponentes::getTableName() . '.Nombre',
                ActualizacionesComponentes::getTableName() . '.idcomponente',
                ActualizacionesComponentes::getTableName() . '.created_at',
                ActualizacionesComponentes::getTableName() . '.updated_at',
                Componentes::getTableName() . '.Nombre as NombreComponente'
            )
            ->where(ActualizacionesComponentes::getTableName() . '.Nombre', 'like', '%' . $nombreb.  '%')
            ->where(Aplicaciones::getTableName() . '.Nombre', 'like', '%' . $aplicacionb.  '%')
           
            //->where(ActualizacionesComponentes::getTableName() . '.Fecha', '>=', $fechadesde)
            //->where(ActualizacionesComponentes::getTableName() . '.Fecha', '<=', $fechahasta)
            ->paginate(5);

        return view('actualizacionesComponentes.index', ['actualizacionesComponentes' => $actualizacionesComponentes]);
    }
    /**
     * Función para crear nueva aplicación. Abre la vista de creación de actualizacionesComponentes
     */
    public function create()
    {
        $componentes = Componentes::get();
        return view('actualizacionesComponentes.create', ['componentes' => $componentes]);
    }

    public function store(Request $request)
    {
        //dd($request);
        if ($request->has('ID'))
            $actualizacionesComponentes = ActualizacionesComponentes::find($request->get('ID'));
        else
            $actualizacionesComponentes = new ActualizacionesComponentes;
        $actualizacionesComponentes->Nombre = $request->get('NOMBRE');
        $actualizacionesComponentes->idcomponente = $request->get('idcomponente');
        $actualizacionesComponentes->observaciones = $request->get('observaciones');

        $actualizacionesComponentes->save();
        return redirect('actualizacionesComponentes');
    }

    public function edit($id)
    {
        $actualizacionesComponentes = ActualizacionesComponentes::find($id);
        $componentes = Componentes::get();
        return view('actualizacionesComponentes.edit', ['actualizacionesComponentes' => $actualizacionesComponentes,  'componentes' => $componentes]);
    }

    public function show($id)
    {
        $actualizacionesComponentes = ActualizacionesComponentes::find($id);
        $componentes = Componentes::find($actualizacionesComponentes->idcomponente);
        return view('actualizacionesComponentes.show', ['actualizacionesComponentes' => $actualizacionesComponentes, 'componentes' => $componentes]);
    }
    public function delete($id)
    {
        $cactualizacionesComponentes = ActualizacionesComponentes::find($id);
        $cactualizacionesComponentes->delete();
        return redirect('actualizacionesComponentes');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
