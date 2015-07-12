<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

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

    protected function buildFailedValidationResponse(Request $request, array $errors)
    {
        return $this->crearRespuestaError($errors, 422);
    }
}
