@extends('layouts.app')

@section('content')

  <h1>Városok</h1>
  <a href="{{ route('cities.create') }}">Új város</a>
  @foreach($cities as $city)
    <p>{{ $city->name }}</p>
    <form action="{{ route('cities.destroy', $city->id) }}" method="POST">
      <a href="{{ route('cities.edit', $city->id) }}">Szerkesztés</a>
      @csrf
      @method('DELETE')
      <button type="submit">Törlés</button>
    </form>
  @endforeach

@endsection