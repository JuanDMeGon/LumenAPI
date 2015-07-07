<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $fillable = ['nombre', 'direccion', 'telefono', 'carrera'];

	protected $hidden = ['id', 'created_at', 'updated_at'];

	public function cursos()
	{
		return $this->belongsToMany('App\Curso');
	}
}