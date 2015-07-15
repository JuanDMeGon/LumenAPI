<?php namespace App\Http\Controllers;

use App\Curso;

class CursoController extends Controller
{
	public function index()
	{
		$cursos = Curso::all();
		return $this->crearRespuesta($cursos, 200);
	}

	public function show($id)
	{
		$curso = $this->buscar(Curso::class, $id);
		
		return $this->crearRespuesta($curso, 200);
	}
}