<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', [PostController::class, 'view'])->middleware(['auth'])->name('dashboard');

Route::get('/user/{id}', [UserController::class, 'view']);

Route::prefix('post')->group(function() {

    Route::get('/', function () {

        return view('createpost');

    })->name('post');

    Route::post('create', [PostController::class, 'store'])->name('create-post');

});

require __DIR__.'/auth.php';
