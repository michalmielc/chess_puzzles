<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// WIDOK START
Route::get('/','BookController@start')->name('start');

// WIDOK WSZYSTKIE KSIĄŻKI
Route::get('/books','BookController@index')->name('books.index');

// WIDOK WSZYSTKIE PUZZLE Z KSIĄŻKI O ID
Route::get('/books/{id}/puzzles','PuzzleController@showPuzzlesFromBook')->name('book.puzzles');

// WIDOK POJEDYŃCZEGO PUZZLE O ID
Route::get('/puzzles/{id}','PuzzleController@show')->name('puzzle.show');

// FORMULARZ ZADANIA TEST ROZWIĄZANE
Route::post('/puzzles','PuzzleController@update')->name('puzzle.update');

// WIDOK WSZYSTKIE OPERACJE
Route::get('/operations','OperationController@index')->name('operations.index');

//  DELETE OPERACJI
Route::get('/operations/{id}/{noOfSolved}/{puzzleId}','OperationController@destroy')->name('operations.destroy');

//  DELETE WSZYSTKIE OPERACJE
Route::get('/operations/delete/all','OperationController@destroyAll')->name('operations.destroyAll');