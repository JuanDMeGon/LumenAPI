<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function crearRespuesta($datos, $codigo)
    {
    	return response()->json(['data' => $datos], $codigo);
    }

    public function crearRespuestaError($mensaje, $codigo)
    {
    	return response()->json(['message' => $mensaje, 'code' => $codigo], $codigo);
    }
}
