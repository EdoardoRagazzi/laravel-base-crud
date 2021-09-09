@extends('layouts.app')
@section ('title', 'dettaglio prodotto')

@section ('main')
<div class="container">
  
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <p class="card-text">{{ $comic->description }}</p>
      <a href="#" class="btn btn-primary">{{ $comic->type }}</a>
    </div>
  </div>

</div>
      
       

@endsection