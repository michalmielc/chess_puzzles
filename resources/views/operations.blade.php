@extends('layout')
@extends('menu')
@section('content')

<div class="container-out">  
  <div class="container-in">

      <p id="deleteAll"><a href="{{ route('operations.destroyAll') }}"
       onclick="return confirm('Czy usunąć wszytko?')" >DELETE ALL</a></p>                                                                           
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>id puzzle</th>
        <th>Skuteczność</th>
        <th>nr próby</th>
        <th>data rozw.</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
   
         @foreach($operations as $operation)
         <tr>
         <td>{{$operation->id}}</td>
         <td>{{$operation->puzzleId}}</td>
         <td>{{$operation->solved}}</td> 
         <td>{{$operation->attempt}}</td> 
         <td>{{$operation->updated_at}}</td> 
         <td><a href="{{ route('operations.destroy',['id'=>$operation->id,'noOfSolved'=>$operation->solved, 'puzzleId'=>$operation->puzzleId]) }}"
          onclick="return confirm('Czy usunąć rekord?')" >DELETE</a></td> 
        </tr>
        @endforeach
     
    </tbody>
  </table>
  </div>
</div>

@endsection
