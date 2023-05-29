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

Route::get('/', function () {
    return view('pages.home');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.aboutUs');
})->name('about-us');

Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');

Route::prefix('videos')->name('videos.')->group(function () {
    Route::get('/', [App\Http\Controllers\VideoController::class, 'index'])->name('index');
    Route::get('/search', [App\Http\Controllers\VideoController::class, 'search'])->name('search');
    Route::get('/{video}', [App\Http\Controllers\VideoController::class, 'show'])->name('show');
    Route::post('/search', [App\Http\Controllers\VideoController::class, 'search'])->name('search');
});

//Front-End Blogs Routes
Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/search', [App\Http\Controllers\BlogController::class, 'search'])->name('search');
    Route::get('/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');
    Route::post('/search', [App\Http\Controllers\BlogController::class, 'search'])->name('search');

});

//-------------ADMIN PANEL-------------

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    //Videos
    Route::prefix('videos')->name('videos.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\VideoController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        Route::get('/{video}/edit', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        Route::put('/{id}/update', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        Route::get('/{id}', [App\Http\Controllers\Admin\VideoController::class, 'destroy'])->name('destroy');
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
