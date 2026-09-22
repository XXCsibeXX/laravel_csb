@extends('layouts.app')

@section('title', __('Új város létrehozása'))

@section('content')
<h1>Új város</h1>

  <form action="{{ route('cities.store') }}" method="POST">
      @csrf

      <label for="name">Város neve</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required>
      <label for="name">Város irányítószáma</label>
      <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" required>
      <label for="name">Megye</label>
      <select name="county_id" id="county_id">
      @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->name }}</option>
      @endforeach
      </select>
     

      <button type="submit">Mentés</button>
      <a href="{{ route('cities.index') }}">Mégse</a>
  </form>
@endsection
