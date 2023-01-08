<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);
Route::post('/',[TaskController::class, 'store'])->name('task.ajouter');
Route::get('/{task}', [TaskController::class, 'destroy'])->name('task.delete');
Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/{task}',[TaskController::class, 'update'])->name('task.update');
Route::post('/editStatus/{task}', [TaskController::class, 'updateStatus'])->name('task.editStatus');