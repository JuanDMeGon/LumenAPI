<?php namespace App\Http\Controllers;

use App\Profesor;

class ProfesorCursoController extends Controller
{
	public function index($profesor_id)
	{
		$profesor = Profesor::find($profesor_id);

		if($profesor)
		{
			$cursos = $profesor->cursos;

			return $this->crearRespuesta($cursos, 200);
		}

		return $this->crearRespuestaError('No se puede encontrar un profesor con el id dado', 404);
	}

	public function update()
	{
		return 'desde update en profesorcursocontroller';
	}

	public function store()
	{
		return 'desde store en profesorcursocontroller';
	}

	public function destroy()
	{
		return 'desde destroy en profesorcursocontroller';
	}
}