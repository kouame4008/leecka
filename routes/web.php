<?php

use App\Http\Controllers\Users\UsersController;
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

// Route::get('/', function () {
//     return view('vuejs');
// });

// Route::prefix('user')->group( function() {


//     Route::post('login', [UsersController::class, 'login'])->name('login.user');

//     Route::get('login/github', [UsersController::class, 'github'])->name('github');

//     Route::get('login/github/redirect', [UsersController::class, 'githubRedirect'])->name('github.redirect');

//     Route::get('dashboard', function () {
//         return view('home');
//     })->name('dashboard');


// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{any?}', function () {
    return view('vuejs');
});
