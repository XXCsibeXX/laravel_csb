@extends('layouts.app')

@section('content')

  <h1>Megyék</h1>
  <a href="{{ route('counties.create') }}">Új megye</a>
  @foreach($counties as $county)
    <p>{{ $county->name }}</p>
    <form action="{{ route('counties.destroy', $county->id) }}" method="POST">
      <a href="{{ route('counties.edit', $county->id) }}">Szerkesztés</a>
      @csrf
      @method('DELETE')
      <button type="submit">Törlés</button>
    </form>
  @endforeach

@endsection
