@extends('layouts.main')

@section('content')
<div class="container">
  <h1>Elenco fumetti</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($fumettis as $fumetto)
      <tr>
        <th scope="row">{{ $fumetto->id }}</th>
        <td>{{ $fumetto->title }}</td>
        <td>{{ $fumetto->price }}</td>
        <td><a href="{{ route('fumettis.show', $fumetto) }}" class="btn btn-success">Show</a></td>
        <td><a href="{{ route('fumettis.edit', $fumetto) }}" class="btn btn-primary">Edit</a></td>
        <td><a href="#" class="btn btn-danger">Delete</a></td>
      </tr>  
      @endforeach
      
      
  </tbody>
</table>
</div>
  
@endsection