<?php

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
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('pages.home');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.aboutUs');
})->name('about-us');


Route::post('/subscribe', [App\Http\Controllers\SubscribeController::class, 'store'])->name('newsletter.store');

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us/store', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');

Route::prefix('videos')->name('videos.')->group(function () {
    Route::get('/', [App\Http\Controllers\VideoController::class, 'index'])->name('index');
    Route::get('/search', [App\Http\Controllers\VideoController::class, 'search'])->name('search');
    Route::get('/{video}', [App\Http\Controllers\VideoController::class, 'show'])->name('show');
});

//Front-End Blogs Routes
Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/search', [App\Http\Controllers\BlogController::class, 'search'])->name('search');
    Route::get('/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');

});

//-------------ADMIN PANEL-------------

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    //Videos
    Route::prefix('videos')->name('videos.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\VideoController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        Route::get('/{video}/edit', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        Route::get('/{id}', [App\Http\Controllers\Admin\VideoController::class, 'destroy'])->name('destroy');
        Route::post('/asdasdsdasdsadas', [App\Http\Controllers\Admin\VideoController::class, 'uploadLargeFiles'])->name('files.upload.large');
        Route::post('/complete-upload', [App\Http\Controllers\Admin\VideoController::class, 'completeUpload'])->name('complete-upload');
        Route::post('/upload-chunk', [App\Http\Controllers\Admin\VideoController::class, 'uploadChunk'])->name('upload-chunk');
    });

//---BLOGS Routes---//
    Route::prefix('blogs')->name('blogs.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
        Route::get('/{blog}/edit', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
        Route::delete('/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');
    });

    // Blogs
    // Route::prefix('blogs')->name('blogs.')->group(function () {
    //     Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
    //         Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
    //         Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
    //         Route::get('/{tour}', [App\Http\Controllers\Admin\BlogController::class, 'show'])->name('show');
    //         Route::get('/{tour}/edit', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
    //         Route::put('/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
    //         Route::delete('/{tour:id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');
    // });
});

