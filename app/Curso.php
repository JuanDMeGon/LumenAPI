<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $fillable = ['titulo', 'descripcion', 'valor', 'profesor_id'];

	public function profesor()
	{
		return $this->belongsTo('App\Profesor');
	}

	public function estudiantes()
	{
		return $this->belongsToMany('App\Estudiante');
	}
}