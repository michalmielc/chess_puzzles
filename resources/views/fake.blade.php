@foreach($puzzlesToUpdate as $puzzle)
         <tr>
         <td>{{$puzzle->solved}}</td>
         <td> {{$puzzle->attempts}}</a></td>

@endforeach