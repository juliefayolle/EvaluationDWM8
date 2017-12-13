<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog as Dog;

class BaseController extends Controller
{
    public function index()
    {
      $dogs = Dog::all();
      return view('accueil', ['dogs' => $dogs]);
    }
}
