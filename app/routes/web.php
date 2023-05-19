<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsServicesController;
use App\Http\Controllers\LoyalCustomersController;
use App\Http\Controllers\GetQuotationController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\Admin\SessionsController;
use App\Http\Controllers\Admin\InfoUserController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\ResetController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ProductsController as AdminProductsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\PublicUploadController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('services')->name('services')->group(function(){
    Route::get('/{slug}', [ProductsServicesController::class, 'serviceProducts'])->name('.view');
});

Route::prefix('products')->name('products')->group(function(){
    Route::get('/', [ProductsServicesController::class, 'index']);
    Route::get('/{slug}', [ProductsServicesController::class, 'view'])->name('.view');
    Route::get('/detail/{product}', [ProductsServicesController::class, 'peek'])->name('.detail');
});

Route::prefix('news')->name('news')->group(function(){
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/peek/{post}', [NewsController::class, 'peek'])->name('.peek');
    Route::get('/{slug}', [NewsController::class, 'view'])->name('.view');
});


Route::prefix('quotation')->name('quotation')->group(function() {
    Route::get('/', [GetQuotationController::class,'index']);
    Route::post('/', [GetQuotationController::class,'send'])->name('.send');
    Route::post('/upload', [GetQuotationController::class,'uploadAttachments'])->name('.upload');
});

Route::name('about')->group(function() {

    Route::get('/about-us', function () {
        return view('about.about-us');
    })->name('.aboutus');

    Route::get('/contact-us', function () {
        return view('about.contact');
    })->name('.contact');
    
    Route::get('/team', function () {
        return view('about.team');
    })->name('.team');
    
    Route::get('/mission', function () {
        return view('about.mission');
    })->name('.mission');

    Route::get('/vision', function () {
        return view('about.vision');
    })->name('.vision');

    Route::get('/partners', [LoyalCustomersController::class, 'index'])->name('.partners');

    Route::get('/faq', function () {
        return view('about.faq');
    })->name('.faq');
});

Route::name('admin')->middleware('auth')->prefix('admin')->group(function () {

    Route::post('tinymce', [PublicUploadController::class, 'tinymce'])->name('.upload.tinymce');

    Route::name('.products')->prefix('products')->group(function () {
        Route::get('', [AdminProductsController::class, 'index']);
        Route::get('create', [AdminProductsController::class, 'create'])->name('.create');
        Route::post('create', [AdminProductsController::class, 'store'])->name('.store');
        Route::get('{id}', [AdminProductsController::class, 'view'])->name('.view');
        Route::patch('{id}', [AdminProductsController::class, 'update'])->name('.update');
        Route::delete('{id}', [AdminProductsController::class, 'delete'])->name('.delete');
        Route::post('upload-image/{id}', [AdminProductsController::class, 'uploadImage'])->name('.images');
    });

    Route::name('.posts')->prefix('posts')->group(function () {
        Route::get('', [PostsController::class, 'index']);
        Route::get('create', [PostsController::class, 'create'])->name('.create');
        Route::post('create', [PostsController::class, 'store'])->name('.store');
        Route::get('{id}', [PostsController::class, 'view'])->name('.view');
        Route::patch('{id}', [PostsController::class, 'update'])->name('.update');
        Route::delete('{id}', [PostsController::class, 'delete'])->name('.delete');
        Route::post('upload-image/{id}', [PostsController::class, 'uploadImage'])->name('.images');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
    if(auth()->user())
        return redirect()->route('admin.products');
        
    return view('admin/session/login-session');
})->name('login');