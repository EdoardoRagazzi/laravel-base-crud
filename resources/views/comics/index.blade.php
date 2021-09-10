@extends('layouts.app')
@section ('title', 'Comics')

@section ('main')
       <div class="container-fluid">
         <p>
           @if (session('update'))
           <div class="alert alert-success">
             {{session('update')}}
           </div>
             
           @endif
         </p>
        <table class="table table-dark table-striped">
            
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic )
                        
                   
                  <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{ route('comics.show', [$comic->id]) }}" class="btn btn-success">Show</a>
                        <a href="{{ route('comics.edit', [$comic->id]) }}" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                       
                    </td>
                    @endforeach

                   
               
                </tbody>
              
        </table>
        <div>
            {{$comics->links()}}
        </div>
       </div>
       

@endsection