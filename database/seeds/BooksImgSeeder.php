<?php

use Illuminate\Database\Seeder;

class BooksImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')
        ->where('id', 1)
        ->update(array('src' => '/img/chess_1a.jpg'));
        
        DB::table('books')
        ->where('id', 2)
        ->update(array('src' => '/img/chess_1b.jpg'));
        
        DB::table('books')
        ->where('id', 3)
        ->update(array('src' => '/img/chess_2.jpg'));
        
        DB::table('books')
        ->where('id', 4)
        ->update(array('src' => '/img/chess_3.jpg'));
        
        DB::table('books')
        ->where('id', 5)
        ->update(array('src' => '/img/chess_4.jpg'));

        DB::table('books')
        ->where('id', 6)
        ->update(array('src' => '/img/1001_Emms.jpg'));

        DB::table('books')
        ->where('id', 7)
        ->update(array('src' => '/img/school_chess_1.jpg'));

        DB::table('books')
        ->where('id', 8)
        ->update(array('src' => '/img/school_chess_2.jpg'));

        DB::table('books')
        ->where('id', 9)
        ->update(array('src' => '/img/school_chess_3.jpg'));

        DB::table('books')
        ->where('id', 10)
        ->update(array('src' => '/img/school_chess_4.jpg'));

        DB::table('books')
        ->where('id', 11)
        ->update(array('src' => '/img/1001_Nunn.jpg'));

        DB::table('books')
        ->where('id', 12)
        ->update(array('src' => '/img/5334.jpg'));

        DB::table('books')
        ->where('id', 13)
        ->update(array('src' => '/img/lamiglowki.jpg'));

        DB::table('books')
        ->where('id', 14)
        ->update(array('src' => '/img/Tiger_1500_1.jpg'));

        DB::table('books')
        ->where('id', 15)
        ->update(array('src' => '/img/Tiger_1500_2.jpg'));

        DB::table('books')
        ->where('id', 16)
        ->update(array('src' => '/img/Tiger_1500_3.jpg'));

        DB::table('books')
        ->where('id', 17)
        ->update(array('src' => '/img/Tiger_1500_u.jpg'));

        DB::table('books')
        ->where('id', 18)
        ->update(array('src' => '/img/Tiger_1800_1.jpg'));

        DB::table('books')
        ->where('id', 19)
        ->update(array('src' => '/img/Tiger_1800_2.jpg'));

        DB::table('books')
        ->where('id', 20)
        ->update(array('src' => '/img/Tiger_1800_3.jpg'));




    }
}
