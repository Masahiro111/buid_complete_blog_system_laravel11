<?php

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

Route::get('/createcategory', function () {

    // Category::create([
    //     'name' => 'Education',
    //     'slug' => 'education',
    // ]);

    // Category::create([
    //     'name' => 'Programing',
    //     'slug' => 'programing',
    // ]);
});

Route::get('/createpost', function () {

    // $post = Post::create([
    //     'title' => 'this is post title',
    //     'excerpt' => 'this is excerpt',
    //     'slug' => 'this is slug 2',
    //     'body' => 'this is body',
    //     'user_id' => 1,
    //     'category_id' => Category::find(6)->id,
    // ]);

    // $post->image()->create([
    //     'name' => 'random file',
    //     'extension' => 'jpg',
    //     'path' => '/image/random_file.jpg',
    // ]);

    $user = User::find(1);

    $user->image()->create([
        'name' => 'random file for user',
        'extension' => 'jpg',
        'path' => '/image/random_file.jpg',
    ]);
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
