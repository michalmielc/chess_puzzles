@extends('layout')
@section ('content')
<div class="container-out"> 
  <div class="container-form">
    <div class= "container-caption">
    <h4><img src="{{ URL::asset($book->src) }}" alt="{{ $book->src }}" width="80" height="120">   {{ $book->title }} <h4>
    <p>nr zadania: {{ $puzzle->name }}</p>
    <p>rozwiązanych: {{ $puzzle->attempts }}</p>
    <p>poprawnie: {{ $puzzle->solved }}</p>
    </div>

<form action="{{ route('puzzle.update')}}" class="form" method="POST">
  @csrf
  <p>odpowiedż:</p><br>
  <input type="radio"  id="result1" name="result" value="0">
  <label for="result1" class="radio">BŁĄD</label><br>
  
  <input type="radio" id="result2" name="result" value="1">
  <label for="result2" class="radio">ROZWIĄZANE</label><br><br>
  
  <input type="hidden" name="id" value=" {{ $puzzle->id }} ">
  <input type="hidden" name="bookId" value=" {{ $puzzle->bookId }} ">
  <input type="hidden" name="attempts" value=" {{ $puzzle->attempts }} ">
  <input type="hidden" name="solved" value=" {{ $puzzle->solved }} ">
  <input type="submit" name="submit" value="CONFIRM" id="confirm" class="submit">
  <input type="submit" name="cancel" value="CANCEL" id="cancel"class="submit">
  </form>
</div>
</div>
@endsection
