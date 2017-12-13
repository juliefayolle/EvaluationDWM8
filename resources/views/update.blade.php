@extends('layouts.base')
@section('title', 'Insertion')
@section('main')
  <h1>Insertion</h1>
  <form action='/dog/update' method="post">
    {!! Form::open(['url' => '/dog/update', 'class' => 'insertForm']) !!}
        {{{ Form::hidden('id', $dog->id)}}}
        <div class="form-group">
        {{{ Form::label('Nom') }}}
        {{{ Form::text('name', $dog->name) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Taille') }}}
        {{{ Form::number('size', $dog->size) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Poids') }}}
        {{{ Form::number('weight', $dog->weight) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Age') }}}
        {{{ Form::number('age', $dog->age) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Sexe') }}}
        {{{ Form::select('gender', $genders, $dog->gender->id) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Couleur') }}}
        {{{ Form::select('colors[]', $colors, $dog->colors, ['multiple' => true]) }}}
      </div>
      {{{ Form::submit('updater un chien') }}}
    {!! Form::close() !!}
