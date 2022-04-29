<?php

use App\Http\Controllers\PostController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
//Route::get('posts', function () {
    //return response()->json([
        //'title' => 'mon super titre',
        //'description' => 'ma super description'
    //]);
//});
//Route::get('articles', function () {
    //return view('articles');
//});
