@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
  <h1>Accueil</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="bold" scope="col">Nom</th>
        <th class="bold" scope="col">Taille (cm)</th>
        <th class="bold" scope="col">Poids (kg)</th>
        <th class="bold" scope="col">Âge</th>
        <th class="bold" scope="col">Sexe</th>
        <th class="bold" scope="col">Couleur</th>
        <th class="bold" scope="col"></th>
        <th class="bold" scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dogs as $dog)
      <tr>
        <td>{{ $dog->name }}</td>
        <td>{{ $dog->size }}</td>
        <td>{{ $dog->weight }}</td>
        <td>{{ $dog->age }}</td>
        @if ($dog->gender)
          <td>{{ $dog->gender->gender }}</td>
        @else
          <td>Unknown</td>
        @endif
        @if ($dog->colors)
          <td>
            @foreach ($dog->colors as $color)
              {{ $color->color}}
            @endforeach
          </td>
        @else
          <td>Transparent</td>
        @endif
        <td>
          <form action="/dog/delete/{{$dog->id}}" method="get">
            {{ csrf_field() }}
            <button type="submit">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
          </form>
        </td>
        <td>
          <form action="/dog/update/{{$dog->id}}" method="get">
            {{ csrf_field() }}
            <button type="submit">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
