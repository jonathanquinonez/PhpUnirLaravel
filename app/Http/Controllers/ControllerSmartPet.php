<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ControllerSmartPet extends Controller
{
    /**
     * Este método se encarga de mostrar toda la data inicial
     * @param 
     * @return View welcome
    */
    public function index(){
        $data = DB::table('store')->get();
        //dd($data);
         return view('welcome', compact('data'));
    }
    /**
     * Este método se encarga de instanciar la vista y cargar los datos a editar
     * @param $id - id del proceso a modificar
     * @return View editar
    */
    public function editarView($id){
        $data = DB::table('store')->where('id',$id)->first();
         return view('editar', compact('data'));
    }
     /**
     * Este método se encarga de eliminar por id 
     * @param  $id - id del proceso a eliminar
     * @return Redirect a una ruta - index
    */
    public function eliminarAction($id){
        $data = DB::table('store')->get();
                DB::table('store')->delete($id);
        return Redirect::route('index');
    }
    /**
     * Este método se encarga de instanciar una nueva vista para crear
     * @param  
     * @return view nuevo
    */
    public function nuevoView(){
        return view('nuevo');
    }
    /**
     * Este método se encarga de crear en la base de datos un nuevo registro 
     * @param  Request $request con la data 
     * @return Redirect a una ruta - index
    */
    public function nuevoAction(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre'           => 'required|string',
            'descripcion'       => 'required|string',
            'imagenes'     => 'required|string',
            'servicios'     => 'required|string',
            'telefono'     => 'required|string',
            'direccion'              => 'required|string',
            'horario'      => 'required|string'
        ]);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()->back()
            ->withInput($request->only('nombre', 'descripcion','imagenes','servicios','telefono','direccion','horario'))
            ->withErrors($validator->errors());
        }

        $data = (new Pet)->fill($request->all());
        if ($data->save()) {
            return Redirect::route('index');
        };

    }
    /**
     * Este método se encarga de modificar en la base de datos un registro existente
     * @param  Request $request con la data 
     * @return Redirect a una ruta - index
    */
    public function editarAction(Request $request){
        
        $validator = Validator::make($request->all(), [
            'id'           => 'required|numeric',
            'nombre'           => 'required|string',
            'descripcion'       => 'required|string',
            'imagenes'     => 'required|string',
            'servicios'     => 'required|string',
            'telefono'     => 'required|string',
            'direccion'              => 'required|string',
            'horario'      => 'required|string'
        ]);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()->back()
            ->withInput($request->only('nombre', 'descripcion','imagenes','servicios','telefono','direccion','horario'))
            ->withErrors($validator->errors());
        }
        
        $data = Pet::findOrFail($request->id);
        
        if ($request->has('nombre')) {
            $data->nombre = $request->nombre;
        }

        if ($request->has('descripcion')) {
            $data->descripcion = $request->descripcion;
        }
        if ($request->has('imagenes')) {
            $data->imagenes = $request->imagenes;
        }
        if ($request->has('servicios')) {
            $data->servicios = $request->servicios;
        }
        if ($request->has('telefono')) {
            $data->telefono = ucwords($request->telefono);
        }
        if ($request->has('direccion')) {
            $data->direccion = $request->direccion;
        }
        if ($request->has('horario')) {
            $data->horario = $request->horario;
        }
        $data->save();
        return redirect()->route('editarView', ['id' => $request->id]);

    }
}
