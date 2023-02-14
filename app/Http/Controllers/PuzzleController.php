<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Book;
use App\Models\Puzzle;


class PuzzleController extends Controller
{
    // WSZYSTKIE ZADANIA Z KSIĄŻKI
    function showPuzzlesFromBook($id) {
        $puzzles = Puzzle::where('bookId',$id)->get();
        $counter = Puzzle::where('bookId',$id)->get()->count();
        $book = Book::find($id);
        return view('puzzles',['puzzles'=>$puzzles,'counter'=>$counter,'book'=>$book]);
    }

    function show($id) {
        $puzzle = Puzzle::find($id);
        $book = Book::find($puzzle->bookId);
        return view('puzzle',['puzzle'=>$puzzle,'book'=>$book]);
    }

      // UPDATE ZADANIA  Z KSIĄŻKI POWTIERDZONY
      function update() {

        $bookId = request('bookId');
        if(isset($_POST['submit']) && isset($_POST['result']))
        {
            $attempts = request('attempts');
            $attempts++;
            $solved = request('solved');
            $score = request('result');
            if($score==1)
            {
                $solved++;
            }
            $id = request('id');
            $timestamp = date("Y-m-d H:i:s");  



            DB::table('puzzles')
            ->where('id', $id)
            ->update(['attempts' => $attempts,'solved' => $solved,'updated_at' => $timestamp]);

            DB::table('operations')->insert(array(
                'puzzleId'=> $id,
                 'solved' => $score,
                 'attempt'=>$attempts,
                 'updated_at' => $timestamp
                ));

        }

        
         return redirect()->route('book.puzzles', [$bookId]);
        }

}
