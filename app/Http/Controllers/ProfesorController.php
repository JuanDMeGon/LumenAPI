<?php namespace App\Http\Controllers;

use App\Profesor;

class ProfesorController extends Controller
{
	public function index()
	{
		$profesores = Profesor::all();
		return $this->crearRespuesta($profesores, 200);
	}

	public function show($id)
	{
		$profesor = Profesor::find($id);

		if($profesor)
		{
			return $this->crearRespuesta($profesor, 200);
		}

		return $this->crearRespuestaError('Profesor no encontrado', 404);
	}

	public function store()
	{
		return 'desde store en profesorcontroller';
	}

	public function update()
	{
		return 'desde update en profesorcontroller';
	}

	public function destroy()
	{
		return 'desde destroy en profesorcontroller';
	}
}