<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([ [
            'title'=>'CHESS SCHOOL Ia'
        ],
        [
            'title'=>'CHESS SCHOOL Ib'
        ],
        [
            'title'=>'CHESS SCHOOL II'
        ],
        [
            'title'=>'CHESS SCHOOL III'
        ],
        [
            'title'=>'CHESS SCHOOL IV'
        ],
        [
            'title'=>'1001 Schachmatts Emms'
        ],
        [
            'title'=>'SCHOOL OF CHESS TATCTICS I'
        ],
        [
            'title'=>'SCHOOL OF CHESS TATCTICS II'
        ],
        [
            'title'=>'SCHOOL OF CHESS TATCTICS III'
        ],
        [
            'title'=>'SCHOOL OF CHESS TATCTICS IV'
        ],
        [
            'title'=>'1001 Schachmatts Nunn'
        ],
        [
            'title'=>'5334 chess problems'
        ],
        [
            'title'=>'Łamigłówki debiutowe'
        ],
        [
            'title'=>'Tigersprung auf DWZ 1500 -  1. Band'
        ], 
         [
            'title'=>'Tigersprung auf DWZ 1500 -  2. Band'
         ], 
         [
            'title'=>'Tigersprung auf DWZ 1500 -  3. Band'
         ], 
         [
            'title'=>'Tigersprung auf DWZ 1500 -  Übungsbuch'
         ], 
         [
            'title'=>'Tigersprung auf DWZ 1800 -  1. Band'
         ], 
         [
            'title'=>'Tigersprung auf DWZ 1800 -  2. Band'
         ],  
         [
            'title'=>'Tigersprung auf DWZ 1800 -  3. Band'
         ]  
         
        
         ]);

    
    }
}
