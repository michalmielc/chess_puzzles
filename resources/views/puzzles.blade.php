@extends('layout')
@extends('menu')
@section('content')
<div class="container-out"> 
  <div class="container-in">
  <div class="container-in2">
    
    <h4><img src="{{ URL::asset($book->src) }}" alt="{{ $book->src }}" width="80" height="120">   {{ $book->title }} <h4>
    
</div>
<p>{{$counter}} testów</p> 
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>zadanie:</th>
        <th>poprawnych</th>
        <th>il. rozwiązań</th>
        <th>%</th>
        <th>ost. rozw.</th>
      </tr>
    </thead>
    <tbody>
   
        @foreach($puzzles as $puzzle)
         <tr>
         <td>{{$puzzle->id}}</a></td>
         <td><a href =" {{ route('puzzle.show',$puzzle->id) }}"> {{$puzzle->name}}</a></td>
         <td>{{$puzzle->solved}}</td>
         <td>{{$puzzle->attempts}}</td>
         <td>  @php
         $solved= $puzzle->solved;
         $attempts = $puzzle->attempts;
         if($attempts==0)
         {
            $attempts=1;
         }
         echo round(100*($solved/$attempts),1).'%';
         @endphp
        </td>
        <td scope="row">{{$puzzle->updated_at}}</td>
        </tr>
        @endforeach
     
    </tbody>
  </table>
  </div>
</div>

@endsection
