<?php namespace App\Http\Controllers;

use App\Profesor;

use Illuminate\Http\Request;

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

	public function store(Request $request)
	{
		$this->validacion($request);

		Profesor::create($request->all());

		return $this->crearRespuesta('El profesor ha sido creado', 201);
	}

	public function update(Request $request, $profesor_id)
	{
		$profesor = Profesor::find($profesor_id);

		if($profesor)
		{
			$this->validacion($request);

			$nombre = $request->get('nombre');
			$direccion = $request->get('direccion');
			$telefono = $request->get('telefono');
			$profesion = $request->get('profesion');

			$profesor->nombre = $nombre;
			$profesor->direccion = $direccion;
			$profesor->telefono = $telefono;
			$profesor->profesion = $profesion;

			$profesor->save();

			return $this->crearRespuesta("El profesor $profesor->id has sido editado", 200);
		}

		return $this->crearRespuestaError('El id especificado no corresponde a un profesor', 404);
	}

	public function destroy($profesor_id)
	{
		$profesor = Profesor::find($profesor_id);

		if($profesor)
		{
			if(sizeof($profesor->cursos) > 0)
			{
				return $this->crearRespuestaError('El profesor tiene cursos asociados. Se deben eliminar estos cursos previamente', 409);
			}
			$profesor->delete();

			return $this->crearRespuesta('El profesor ha sido eliminado', 200);
		}

		return $this->crearRespuestaError('No existe profesor con el id especificado', 404);
	}

	public function validacion($request)
	{
		$reglas = 
		[
			'nombre' => 'required',
			'direccion' => 'required',
			'telefono' => 'required|numeric',
			'profesion' => 'required|in:ingeniería,matemática,física',
		];

		$this->validate($request, $reglas);
	}
}