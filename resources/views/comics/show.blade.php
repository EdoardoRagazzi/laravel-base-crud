@extends('layouts.app')
@section ('title', 'dettaglio prodotto')

@section ('main')
<div class="container">
  
  <div class="card">
    <div class="card-body">
      <ul><h5 class="card-title">Titolo : {{ $comic->title }}</h5>
        <li><p class="card-text">Description : {{ $comic->description }}</p>
          <li><p>Type : {{ $comic->type }}</p>
            <li><p>Series : {{ $comic->series }}</p>
              <li><p>Price : {{ $comic->price }}</p>

              </li>
            </li>
          </li>
        </li>
      </ul>
      
      
      
  </div>

</div>
      
       

@endsection