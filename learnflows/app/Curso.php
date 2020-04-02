<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['name', 'description', 'submajor_id'];

    public function submajors() {
          return $this->belongsTo('App\Submajor');
      }
}
