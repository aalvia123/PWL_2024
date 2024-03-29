<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
 return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
   });

   Route::get('/', function () {
    return 'Selamat Datang';
   });

   Route::get('/about', function () {
    return 'ALVIA NIM 2341728011';
   });

   Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
    });

    Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/Id/{Id}/comments/{comment}', function
($Id, $commentId) {
 return ' Halaman Artikel ' .$Id." Dengan ID : ".$commentId;
});


Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
   })->name('profile');




