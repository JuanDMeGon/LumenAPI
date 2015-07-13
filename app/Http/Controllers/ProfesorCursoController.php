<?php namespace App\Http\Controllers;

use App\Profesor;
use App\Curso;

use Illuminate\Http\Request;

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

	public function store(Request $request, $profesor_id)
	{
		$profesor = Profesor::find($profesor_id);

		if($profesor)
		{
			$this->validacion($request);

			$campos = $request->all();
			$campos['profesor_id'] = $profesor_id;

			Curso::create($campos);

			return $this->crearRespuesta('El curso se ha creado satisfactoriamente', 200);
		}

		return $this->crearRespuestaError('No existe un profesor con el id dado', 404);
	}

	public function update()
	{
		return 'desde update en profesorcursocontroller';
	}

	public function destroy()
	{
		return 'desde destroy en profesorcursocontroller';
	}

	public function validacion($request)
	{
		$reglas = 
		[
			'titulo' => 'required',
			'descripcion' => 'required',
			'valor' => 'required|numeric'
		];

		$this->validate($request, $reglas);
	}
}