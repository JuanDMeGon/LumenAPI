<?php namespace App\Http\Controllers;

use App\Estudiante;

class EstudianteController extends Controller
{
	public function index()
	{
		$estudiantes = Estudiante::all();
		return $this->crearRespuesta($estudiantes, 200);
	}

	public function show($id)
	{
		$estudiante = Estudiante::find($id);

		if($estudiante)
		{
			return $this->crearRespuesta($estudiante, 200);
		}

		return $this->crearRespuestaError('Estudiante no encontrado', 404);
	}

	public function store()
	{
		return 'desde store en estudiantecontroller';
	}

	public function update()
	{
		return 'desde update en estudiantecontroller';
	}

	public function destroy()
	{
		return 'desde destroy en estudiantecontroller';
	}
}