<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $fillable = ['nombre', 'direccion', 'telefono', 'carrera'];

	public function cursos()
	{
		return $this->belongsToMany('App\Curso');
	}
}