<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submajor extends Model
{
	protected $fillable = ['name', 'description', 'major_id'];

	public function cursos() {
        return $this->hasMany('App\Curso');
    }

	public function majors() {
        return $this->belongsTo('App\Major');
    }



}
