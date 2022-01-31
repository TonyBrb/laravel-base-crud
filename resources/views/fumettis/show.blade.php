@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>{{ $fumettis->title }}</h1>
    <p>{{ $fumettis->description }}</p>
    <img src="{{ $fumettis->thumb }}" alt="">

  </div>

  
@endsection