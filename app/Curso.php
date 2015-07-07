<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $fillable = ['titulo', 'descripcion', 'valor'];

	protected $hidden = ['id', 'created_at', 'updated_at'];

	public function profesor()
	{
		return $this->belongsTo('App\Profesor');
	}

	public function estudiantes()
	{
		return $this->belongsToMany('App\Estudiante');
	}
}