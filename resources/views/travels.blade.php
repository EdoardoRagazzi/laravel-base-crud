@extends('layouts.app')
@section ('title', 'Travel Agency')

@section ('main')
    
        @foreach ($travel as  $travel)
    
        <div class="slot col-2 d-inline-block">
        
            <div class="text">
                <h5>{{ $travel->name}} </h5>
                <p>{{ $travel->place}}</p>
                <p>{{ $travel->price}}</p>
                <p>{{ $travel->descriptions}}</p>
            </div>
        </div>
        @endforeach
   
@endsection