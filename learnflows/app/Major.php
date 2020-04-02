<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
	protected $fillable = ['name', 'description'];


	public function submajors() {
        return $this->hasMany('App\Submajor');
    }
}
