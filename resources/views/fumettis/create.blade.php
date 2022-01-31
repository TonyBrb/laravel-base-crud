@extends('layouts.main')

@section('content')
  <div class="container">
    <h1> NuovoFumetto</h1>
    <form action="{{ route('fumettis.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-Label">Nome</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Fumetto">
      </div>
      <div class="mb-3">
        <label for="series" class="form-Label">Nome</label>
      <input type="text" class="form-control" name="series" id="series" placeholder="Genere Fumetto">
      </div>
      <div class="mb-3">
        <label for="image" class="form-Label">Nome</label>
      <input type="text" class="form-control" name="image" id="image" placeholder="URL Immagine">
      </div>
      <div class="mb-3">
        <label for="description" class="form-Label">Descrizione</label>
      <textarea type="number" class="form-control" name="description" id="description" placeholder="Descrizione"> </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="submit" class="btn btn-secondary">Reset</button>
      
    </form>

  </div>

  
@endsection