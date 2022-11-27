<?php

use App\Http\Controllers\Ticket_Controller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/contacts', function () {
    return view('contacts');
})->middleware(['auth'])->name('contacts');

Route::get('/tickets', [Ticket_Controller::class, 'index'])->name('tickets.index');
Route::get('/tickets/all', [Ticket_Controller::class, 'all'])->name('tickets.all');
Route::get('/tickets/create', [Ticket_Controller::class, 'create'])->name('tickets.create');
Route::post('/tickets/store', [Ticket_Controller::class, 'store'])->name('tickets.store');
Route::get('/tickets/edit/{ticket}', [Ticket_Controller::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/update/{ticket}', [Ticket_Controller::class, 'update'])->name('tickets.update');
Route::put('/tickets/updatep/{ticket}', [Ticket_Controller::class, 'updatep'])->name('tickets.updatep');
Route::get('/tickets/show/{ticket}', [Ticket_Controller::class, 'show'])->name('tickets.show');
Route::get('/tickets/rating/{ticket}', [Ticket_Controller::class, 'rating'])->name('tickets.rating');
Route::delete('/tickets/delete/{ticket}', [Ticket_Controller::class, 'destroy'])->name('tickets.delete');

Route::get('/{ticket}/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/{ticket}/comments/create/', [CommentController::class, 'create'])->name('comments.create');
Route::post('/{ticket}/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/{ticket}/comments/edit/{comment}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/{ticket}/comments/update/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::get('/{ticket}/comments/show/{comment}', [CommentController::class, 'show'])->name('comments.show');
Route::delete('/{ticket}/comments/delete/{comment}', [CommentController::class, 'destroy'])->name('comments.delete');

Route::get('/admin/index', [RegisterController::class, 'index'])->name('admin.index');
Route::get('/admin/edit/{admin}', [RegisterController::class, 'edit'])->name('admin.edit');
Route::get('/admin/mute/{admin}', [RegisterController::class, 'mute'])->name('admin.mute');
Route::get('/admin/unmute/{admin}', [RegisterController::class, 'unmute'])->name('admin.unmute');
Route::get('/admin/promote/{admin}', [RegisterController::class, 'promote'])->name('admin.promote');
Route::get('/admin/demote/{admin}', [RegisterController::class, 'demote'])->name('admin.demote');
Route::put('/admin/update/{admin}', [RegisterController::class, 'update'])->name('admin.update');
Route::put('/admin/updatep/{admin}', [RegisterController::class, 'updatep'])->name('admin.updatep');
Route::delete('/admin/delete/{admin}', [RegisterController::class, 'destroy'])->name('admin.delete');


require __DIR__ . '/auth.php';
