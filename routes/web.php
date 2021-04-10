<?php
use App\Http\Controllers\shorturlcontroller;
use App\Http\Controllers\ShortUserController;
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

require __DIR__.'/auth.php';
Route::get('/links', [ShortUserController::class, 'index'])->name('user.links')->middleware('auth');
Route::post('/short',[shorturlcontroller::class, 'short'])->name('short.url');
Route::get('/{code}',[shorturlcontroller::class, 'show'])->name('short.show');
