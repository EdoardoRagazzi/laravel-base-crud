@extends('layouts.app')
@section ('title', 'Comics')

@section ('main')
       <div class="container-fluid">
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
                        <a href="" class="btn btn-primary">Show</a>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-primary">Delete</a>
                       
                    </td>
                    @endforeach

                   
               
                </tbody>
              
        </table>
        <div>
            {{$comics->links()}}
        </div>
       </div>
       

@endsection