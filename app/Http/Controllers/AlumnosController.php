<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    // public function index(Request $body)
    // {
    //     return $body->message;
    // }
    // public function getById(int $id)
    // {
    //     return Ventas::find($id);
    // }

    public function create(Request $body)
    {
        // $nuevaVenta = new Ventas(); //Instanciado la clase
        // $nuevaVenta->descripcion = $body->descripcion;
        // $nuevaVenta->save();
        return "registro guardado bien.";
    }
    public function update(Request $request, $id)
    {
        try {
            if ($id == null) {
                // $actualizarVenta = Ventas::find($id);
                // $actualizarVenta->descripcion = $request->descripcion;
                // $actualizarVenta->save();
                return "registro " . $id . " guardado bien.";
            } else {
                return "No existe un registro con ese id.";
            }
        } catch (Exception $e) {
            return "error";
        }
    }
    public function destroy($id)
    {
        // $ventaBorrar = Ventas::destroy($id);
        // if ($ventaBorrar == null) {
        //     return "No existe este registro.";
        // }
        return "registro se elimino ha sido borrado.";
    }
}
