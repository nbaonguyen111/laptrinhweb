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
use App\Http\Controllers\CrudUserController;

Route::get('/create', [CrudUserController::class, 'createUser']);
Route::post('/create', [CrudUserController::class, 'postUser']);
Route::get('/read/{id}', [CrudUserController::class, 'readUser']);
Route::get('/update/{id}', [CrudUserController::class, 'updateUser']);
Route::post('/update/{id}', [CrudUserController::class, 'postUpdateUser']);
Route::get('/delete/{id}', [CrudUserController::class, 'deleteUser']);
Route::get('/list', [CrudUserController::class, 'listUser']);
Route::get('/login', [CrudUserController::class, 'login']);
Route::get('/dashboard', [CrudUserController::class, 'dashboard']);
Route::get('/', function () {
    return view('welcome');
});
