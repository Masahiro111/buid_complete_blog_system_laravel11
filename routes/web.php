<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminControllers\AdminPostsController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\TinyMCEController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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

// Front User Routes ---------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::post('/posts/{post:slug}', [PostController::class, 'addComment'])->name('post.add_comment');

Route::get('/about', AboutController::class)->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('tags/{tag:name}', [TagController::class, 'show'])->name('tags.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Admin Dashboard Routes ---------------------------------------------------------------------------

Route::prefix('admin')->name('admin.')->middleware(['auth', 'isadmin'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('posts', AdminPostsController::class);

    Route::post('/upload_tinymce_image', [TinyMCEController::class, 'upload_tinymce_image'])->name('upload_tinymce_image');
});


// Laravel ??????
Route::get('/hello', [HomeController::class, 'servicetest'])->name('hello');
