<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\InstalacionesComponentes;
use App\Models\ActualizacionesComponentes;
use App\Models\Componentes;
use App\Models\Aplicaciones;
use Illuminate\Http\Request;

class InstalacionesComponentesController extends Controller
{

    /**
     * Función para devolver el nommbre de un componente, dado su id como parámetro
     */
    public function ajaxApp($id)
    {
        $instalacionesComponentes = InstalacionesComponentes::find($id);
        if ($instalacionesComponentes != null)
            return $instalacionesComponentes->Nombre;
        else
            return "";
    }


    public function index(Request $request)
    {
        //$componentes = Componentes::get();
        $instalacionesComponentes = InstalacionesComponentes::join(Clientes::getTableName(), InstalacionesComponentes::getTableName() . '.idcliente', Clientes::getTableName() . '.id')
            ->join(ActualizacionesComponentes::getTableName(), InstalacionesComponentes::getTableName() . '.idactualizacionescomponentes', ActualizacionesComponentes::getTableName() . '.id')
            //->join(Componentes::getTableName(), ActualizacionesComponentes::getTableName() . '.idcomponente', Componentes::getTableName() . '.id')
            ->select(
                InstalacionesComponentes::getTableName() . '.id',
                Clientes::getTableName() . '.Nombre as NombreCliente',
                ActualizacionesComponentes::getTableName() . '.Nombre as NombreActualizacionComponente',
                InstalacionesComponentes::getTableName() . '.created_at',
                InstalacionesComponentes::getTableName() . '.observaciones'
            )
            //->where(Componentes::getTableName() . '.Nombre',$request->get('COMPONENTE'))
            ->paginate(5);
        
        return view('instalacionesComponentes.index', ['instalacionesComponentes' => $instalacionesComponentes]);
    }

    /**
     * Función para crear nueva instalacion. Abre la vista de creación de instalacionesComponentes
     */
    public function create()
    {
        $clientes = Clientes::get();
        $actualizacionesComponentes = ActualizacionesComponentes::get();
        
        return view('instalacionesComponentes.create', ['clientes' => $clientes, 'actualizacionesComponentes' => $actualizacionesComponentes]);
    }
    // fin crear

    //  funcion de almacenamiento
    public function store(Request $request)
    {
        // dd($request);
        if ($request->has('ID'))
            $instalacionesComponentes = InstalacionesComponentes::find($request->get('ID'));
        else
            $instalacionesComponentes = new InstalacionesComponentes;
        //$instalacionesComponentes->id = $request->get('id');
        $instalacionesComponentes->idcliente = $request->get('idcliente');
        $instalacionesComponentes->idactualizacionescomponentes = $request->get('idactualizacioncomponente');
        //$instalacionesComponentes->nombreactualizacionescomponentes = $request->get('nombreactualizacioncomponente');
        $instalacionesComponentes->observaciones = $request->get('observaciones');
        $instalacionesComponentes->save();
        return redirect('instalacionesComponentes');
    }

    // funcion editar
    public function edit($id)
    {
        $instalacionesComponentes = InstalacionesComponentes::find($id);
        $actualizacionesComponentes = ActualizacionesComponentes::get();
        $clientes = Clientes::get();
		
        return view('instalacionesComponentes.edit', ['instalacionesComponentes' => $instalacionesComponentes,  'clientes' => $clientes, 'actualizacionesComponentes' => $actualizacionesComponentes]);
    }


    // funcion mostrar          


    public function show($id)
    {
        $instalacionesComponentes = InstalacionesComponentes::join(Clientes::getTableName(), InstalacionesComponentes::getTableName() . '.idcliente', Clientes::getTableName() . '.id')
            ->join(ActualizacionesComponentes::getTableName(), InstalacionesComponentes::getTableName() . '.idactualizacionescomponentes', ActualizacionesComponentes::getTableName() . '.id')
            ->where(InstalacionesComponentes::getTableName() . '.id', $id)
            ->select(InstalacionesComponentes::getTableName() . '.id',
                Clientes::getTableName() . '.Nombre as NombreCliente',
                ActualizacionesComponentes::getTableName() . '.Nombre as NombreActualizacion',
                InstalacionesComponentes::getTableName() . '.created_at',
                InstalacionesComponentes::getTableName() . '.observaciones')
            ->first();
        //$clientes = Clientes::find($instalacionesComponentes->idcliente);
        //dd($aplicacion);
        // $componentes = Componentes::join(Aplicaciones::getTableName());
        // $aplicaciones = Aplicaciones::get();
        return view('instalacionesComponentes.show', ['instalacionesComponentes' => $instalacionesComponentes]);
    }

    // funcion eliminar
    public function delete($id)
    {
        $instalacionesComponentes = InstalacionesComponentes::find($id);
        $instalacionesComponentes->delete();
        return redirect('instalacionesComponentes');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
