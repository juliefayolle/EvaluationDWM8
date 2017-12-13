<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $timestamps = false; //permet d'empecher de créer automatiquement des choses inutiles
    public function gender()
    {
      return $this->belongsTo('App\Gender');
    }
    public function colors()
    {
      return $this->belongsToMany('App\Color');
    }
}
