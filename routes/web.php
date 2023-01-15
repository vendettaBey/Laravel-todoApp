<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RateController;

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
    return view('login.main');
});

Route::get('/dashboard', [TaskController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('rating', [RateController::class,'rating'])->name('rating');
Route::post('contact', [RateController::class,'contact'])->name('contact');

Route::resource('task', TaskController::class);

Route::get('/today', [TaskController::class, 'today'])->name('today');
Route::get('/yesterday', [TaskController::class, 'yesterday'])->name('yesterday');
Route::get('/tomorrow', [TaskController::class, 'tomorrow'])->name('tomorrow');
Route::get('/all', [TaskController::class, 'all'])->name('all');

Route::get('/complete/{id}', [TaskController::class, 'complete'])->name('complete');
Route::get('/incomplete/{id}', [TaskController::class, 'incomplete'])->name('incomplete');

Route::fallback(function () {
    return redirect()->route('dashboard');
});



require __DIR__.'/auth.php';