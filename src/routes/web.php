<?php
use Illuminate\Support\Facades\Route;
use Chandachewe\Comments\Http\Controllers\Getfrom;


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

//comment route
Route::get('/commented',[Getfrom::class, 'commented'])->name('commented');


Route::get('/make_comment', function(){
    return view('Comments::index'); 
});

//retrieving comments
Route::get('/retrieveComments',[Getfrom::class, 'retrieveComments']);

//make a reply
Route::get('reply/{id}',[Getfrom::class, 'reply']);

//saving replies
Route::get('/replies',[Getfrom::class, 'replies'])->name("replies");

//retrieving Replies
Route::get('/retrieveReplies',[Getfrom::class, 'retrieveReplies'])->name("retrieveReplies");

//number of replies


//comment route
Route::get('number_of_replies',[Getfrom::class, 'number_of_replies'])->name('number_of_replies');









