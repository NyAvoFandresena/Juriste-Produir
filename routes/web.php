<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/admin/dashboard', [AdminPagesController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/interns', [AdminPagesController::class, 'internList'])->name('admin.interns');
Route::get('/admin/intern/1', [AdminPagesController::class, 'internInfo'])->name('admin.intern');
Route::get('/admin/task/1', [AdminPagesController::class, 'taskInfo'])->name('admin.task');

require __DIR__.'/auth.php';
