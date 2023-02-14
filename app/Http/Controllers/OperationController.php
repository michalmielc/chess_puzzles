<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Operation;
use DB;

class OperationController extends Controller
{
    function index() {
        $operations = Operation::orderBy('updated_at', 'desc')->get();
        return view('operations',['operations'=>$operations]);
      }

    function destroy($id,$noOfSolved,$puzzleId) {
     
        $puzzlesToUpdate = DB::table('puzzles')
                  ->select('solved','attempts')
                  ->where('id', $puzzleId)
                  ->first();


        $attemptsNew= $puzzlesToUpdate->attempts;
        $solvedNew = $puzzlesToUpdate->solved;
       
        $attemptsNew=$attemptsNew-1;
        $solvedNew = $solvedNew -$noOfSolved;

        DB::table('operations')->where('id', '=', $id)->delete();

        DB::table('puzzles')
        ->where('id', '=', $puzzleId)
        ->update(['attempts' => $attemptsNew,'solved' => $solvedNew]);
        
        return redirect('operations');
      }

    function destroyAll() {

       DB::table('operations')->truncate();

       DB::table('puzzles')
        ->update(['attempts' => 0,'solved' => 0,'updated_at'=>NULL]);
        return redirect('operations');
      }
}
