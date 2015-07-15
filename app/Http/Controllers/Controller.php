<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use Symfony\Component\Translation\Exception\NotFoundResourceException;

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

    public function buscar($modelo, $id)
    {
        $instancia = call_user_func("$modelo::find", $id);

        if($instancia)
        {
            return $instancia;
        }

        throw new NotFoundResourceException;
        
    }
}
