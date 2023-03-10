<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('posts', [PostController::class,'index']) -> name('posts.index')-> middleware('auth');
Route::get('posts/create', [PostController::class,'create']) -> name('posts.create')-> middleware('auth');
Route::get('posts/{post}', [PostController::class,'show']) -> name('posts.show')-> middleware('auth');
Route::post('posts', [PostController::class,'store']) -> name('posts.store');
Route::delete('posts/{post}', [PostController::class,'destroy'])->withTrashed()-> name('posts.destroy');
Route::get('posts/{post}/edit', [PostController::class,'edit']) -> name('posts.edit');
Route::put('posts/{post}', [PostController::class,'update']) -> name('posts.update');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
