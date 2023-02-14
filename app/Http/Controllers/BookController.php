<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Puzzle;
use App\Models\Operation;
use App\Models;

class BookController extends Controller
{
    function index() {
      $books = DB::select('
        SELECT  b.id, b.title, SUM(p.solved) AS solvedTotal, SUM(p.attempts) AS attemptsTotal, SUM(p.bookId) AS puzzlesTotal 
        FROM    puzzles AS p
        RIGHT JOIN books AS b ON p.bookId = b.id
        GROUP BY b.title
        ORDER BY b.id;');
      return view('books',['books'=>$books]);
    }

    function start() {
      $puzzlesCounter = Puzzle::count();
      $solved = Puzzle::sum('solved');
      $attempts = Puzzle::sum('attempts');
      $id = DB::table('operations')->count();
      if($id>0)
        { $id = Operation::max('id');
          $lastSolved = Operation::find($id);
          $lastSolved = $lastSolved ->updated_at;
        }
        else{
          $lastSolved="NIC NIE ROZWIĄZANO JESZCZE";
        }
      
      if($attempts ==0) {
        $puzzlesEfficiency=0;
      }
      else {
      $puzzlesEfficiency = $solved.' / '. $attempts.' = '. (round(100*$solved/$attempts,1)).'%';
      }

     return view('welcome',
     ['counter'=>$puzzlesCounter,
      'efficiency'=>$puzzlesEfficiency,
      'lastSolved'=>  $lastSolved]);
    }
}
