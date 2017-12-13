<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Gender;
use App\Color;

class DogController extends Controller
{
    public function insertOne(Request $request)
    {
      $dog = new Dog;
      $dog->name = $request->name;
      $dog->size = $request->size;
      $dog->weight = $request->weight;
      $dog->age = $request->age;
      $dog->gender_id = $request->gender;
      $dog->save();
      $dog->colors()->attach($request->color);
      return redirect('/');
    }

    public function deleteOne(Request $request, $id)
    {
      $dog = Dog::find($id);
      $dog->colors()->detach();
      $dog->delete();
      return redirect('/');

    }

    public function updateOne(Request $request, $id)
   {
       $dog = Dog::find($id);
       $gendersAll = Gender::all();
       $genders = [];
       foreach ($gendersAll as $value) {
           $genders[$value->id] = $value->gender;
       }
       $colorsAll = Color::all();
       $colors = [];
       foreach ($colorsAll as $value) {
           $colors[$value->id] = $value->color;
       }
       return view('update', ['genders' => $genders, 'colors' => $colors, 'dog' => $dog]);
   }

   public function updateOneAction(Request $request)
   {
       $dog = Dog::find($request->id);
       $dog->name = $request->name;
       $dog->size = $request->size;
       $dog->weight = $request->weight;
       $dog->age = $request->age;
       $dog->gender_id = $request->gender;
       $dog->save();
       $dog->colors()->detach();
       $dog->colors()->attach($request->colors);
       return redirect('/');
   }
}
