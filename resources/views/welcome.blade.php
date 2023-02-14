@extends('layout')
@extends('menu')
@section('content')
<ul class="list-group">
  <li class="list-group-item">ilość zadań: {{ $counter }}</li>
  <li class="list-group-item">skuteczność: {{ $efficiency }}</li>
  <li class="list-group-item">ostatnie rozwiązanie: {{ $lastSolved }}</li>
  <li class="list-group-item">cel do 31.12.2023:</li>
</ul>
@endsection