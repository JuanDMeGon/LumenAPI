<?php namespace App\Http\Controllers;

use App\Estudiante;

use Illuminate\Http\Request;

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

	public function store(Request $request)
	{
		$reglas = 
		[
			'nombre' => 'required',
			'direccion' => 'required',
			'telefono' => 'required|numeric',
			'carrera' => 'required|in:ingeniería,matemática,física',
		];

		$this->validate($request, $reglas);

		Estudiante::create($request->all());

		return $this->crearRespuesta('El estudiante ha sido creado', 201);
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