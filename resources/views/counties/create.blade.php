@extends('layouts.app')

@section('title', __('Új megye létrehozása'))

@section('content')
<h1>Új megye</h1>

  <form action="{{ route('counties.store') }}" method="POST">
      @csrf

      <label for="name">Megye neve</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required>

      <button type="submit">Mentés</button>
      <a href="{{ route('counties.index') }}">Mégse</a>
  </form>
@endsection