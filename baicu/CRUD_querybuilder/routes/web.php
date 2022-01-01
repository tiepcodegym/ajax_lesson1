<?php


use App\Http\Controllers\AuthorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors',[AuthorController::class,'index']);
Route::get('/authors/create',[AuthorController::class,'showFormCreate']);
Route::post('/authors/create',[AuthorController::class,'create']);
Route::get('/authors/{id}/detail',[AuthorController::class,'show']);
Route::get('/authors/{id}',[AuthorController::class,'delete']);
Route::get('/authors/{id}/update',[AuthorController::class,'edit']);
Route::post('/authors/{id}/update',[AuthorController::class,'update']);

