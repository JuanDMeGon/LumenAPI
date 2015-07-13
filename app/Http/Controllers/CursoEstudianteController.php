<?php namespace App\Http\Controllers;

use App\Curso;

class CursoEstudianteController extends Controller
{
	public function index($curso_id)
	{
		$curso = Curso::find($curso_id);

		if($curso)
		{
			$estudiantes = $curso->estudiantes;

			return $this->crearRespuesta($estudiantes, 200);
		}

		return $this->crearRespuestaError('No se puede encontrar un curso con el id dado', 404);
	}

	public function store()
	{
		return 'desde store en cursoestudiantecontroller';
	}

	public function destroy()
	{
		return 'desde destroy en cursoestudiantecontroller';
	}
}