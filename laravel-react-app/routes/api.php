<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

//Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
//Route::get('projects/add', [ProjectController::class, 'insert']);
//Route::post('projects', [ProjectController::class, 'store']);
//Route::get('projects/show/{id}', [ProjectController::class, 'show'])->name('show');
//Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
//Route::put('projects/{id}', [ProjectController::class, 'update'])->name('update');
//Route::delete('projects/show/{id}', [ProjectController::class, 'destroy'])->name('destroy');
