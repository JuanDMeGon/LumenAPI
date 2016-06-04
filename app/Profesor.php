<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
	protected $table = 'profesores';

	protected $fillable = ['nombre', 'direccion', 'telefono', 'profesion'];

	public function cursos()
	{
		return $this->hasMany('App\Curso');
	}
}
