<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddTodocontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('addTodo',[AddTodocontroller::class,'addTodo']);
Route::get('getTodo',[AddTodocontroller::class,'getTodo']);
Route::post('/del/{id}', [AddTodocontroller::class,'delete']);
Route::post('/update/{id}', [AddTodocontroller::class,'updatetodo']);
Route::post('Start/{id}', [AddTodocontroller::class,'starttime']);
Route::post('Finish/{id}', [AddTodocontroller::class,'finishtime']);
