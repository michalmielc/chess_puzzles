<?php

use Illuminate\Database\Seeder;
use App\Models\Puzzle;

class PuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puzzles')->delete();
 
        $this->createPuzzles(1,1,719);
        $this->createPuzzles(2,720,1299);
        $this->createPuzzles(3,1,1188);
        $this->createPuzzles(4,1,750);
        $this->createPuzzles(5,1,600);
        $this->createPuzzles(6,1,1001);
        $this->createPuzzles(7,1,630);
        $this->createPuzzles(8,1,540);
        $this->createPuzzles(9,1,510);
        $this->createPuzzles(10,1,516);
        $this->createPuzzles(11,1,1001);
        $this->createPuzzles(12,1,5334);
        $this->createPuzzles(13,1,600);
        $this->createTigerPuzzles(14);
        $this->createTigerPuzzles(15);
        $this->createTigerPuzzles(16);
        $this->createTigerPuzzles(18);
        $this->createTigerPuzzles(19);
        $this->createTigerPuzzles(20);
        $this->createTigerTest(17);
    }

       function createPuzzles($bookId,$first,$last){
        $puzzles = array();
        for ($i=$first; $i <= $last; $i++) {
            $nazwa = 'Zadanie nr: '.$i;
            $puzzles[]= [
            'bookId' => $bookId,
            'name' => $nazwa, 
            'attempts' => 0,
            'solved' => 0];
        }
        Puzzle::insert($puzzles);
    }

    function createTigerTest($bookId){
        $puzzles = array();
        for ($i=1; $i <= 3; $i++) {
            for ($j=1; $j <= 24; $j++)  {
                for ($k=1; $k <= 6; $k++)  {

                
            $nazwa = 'Tom:'.$i.'  '.$j.'-'.$k;
            $puzzles[]= [
            'bookId' => $bookId,
            'name' => $nazwa, 
            'attempts' => 0,
            'solved' => 0];
                }
            }
        }
       

        Puzzle::insert($puzzles);
    }

    function createTigerPuzzles($bookId){
        $puzzles = array();
        for ($i=1; $i <= 24; $i++) {
            for ($j=1; $j <= 12; $j++)  {
            $nazwa = 'Ü '.$i.'-'.$j;
            $puzzles[]= [
            'bookId' => $bookId,
            'name' => $nazwa, 
            'attempts' => 0,
            'solved' => 0];
            }
        }
        for ($i=1; $i <= 24; $i++) {
            $nazwa = 'A -'.$i;
            $puzzles[]= [
            'bookId' => $bookId,
            'name' => $nazwa, 
            'attempts' => 0,
            'solved' => 0];
        }

        Puzzle::insert($puzzles);
    }
}
