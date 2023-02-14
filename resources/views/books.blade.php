@extends('layout')
@extends('menu')
@section('content')

<div class="container-out">  
  <div class="container-in">
                                                                                  
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Tytuł</th>
        <th>Skuteczność</th>
        <th>%</th>
      </tr>
    </thead>
    <tbody>
   
         @foreach($books as $book)
         <tr>
         <td>{{$book->id}}</td>
         <td id="tytul"><a href ="{{route('book.puzzles',$book->id)}}"> {{$book->title}}</a></td>
         <td>{{$book->solvedTotal}} / {{$book->attemptsTotal}} </td> 
         @php
          $puzzles= $book->puzzlesTotal;
          $attempts = $book->attemptsTotal;
          if($puzzles==0)
            {
              $puzzles=1;
             }
          $processed = round(100*($attempts/$puzzles),1);
          echo'<td>'.$processed.'</td>';
        @endphp
      
        </tr>
        @endforeach
     
    </tbody>
  </table>
  </div>
</div>

@endsection
