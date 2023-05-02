<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LoyalCustomersController;
use App\Http\Controllers\GetQuotationController;

use App\Http\Controllers\Admin\SessionsController;
use App\Http\Controllers\Admin\InfoUserController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\ResetController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\ProductsController as AdminProductsController;




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
    Route::get('/', [ServicesController::class, 'index']); 
    Route::get('/{id}', [ServicesController::class, 'view'])->name('.view');
});

Route::prefix('products')->name('products')->group(function(){
    Route::get('/', function () {
        return view('products-services.products');
    });
    Route::get('/{product}', [ProductsController::class, 'view'])->name('.view');
});

Route::prefix('news')->name('news')->group(function(){
    Route::get('/', function () {
        return view('news');
    });
});


Route::post('/quotation', [GetQuotationController::class,'send'])->name('quotation.send');
Route::get('/quotation', [GetQuotationController::class,'index'])->name('quotation');

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

    Route::name('.products')->prefix('products')->group(function () {
        Route::get('', [AdminProductsController::class, 'index']);
        Route::get('create', [AdminProductsController::class, 'create'])->name('.create');
        Route::post('create', [AdminProductsController::class, 'store'])->name('.store');
        Route::get('{id}', [AdminProductsController::class, 'view'])->name('.view');
        Route::patch('{id}', [AdminProductsController::class, 'update'])->name('.update');
    });

});


Route::group(['middleware' => 'auth'], function () {

	Route::get('billing', function () {
		return view('admin/billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('admin/profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('admin/laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('admin/tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('admin/virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('admin/static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('admin/static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
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
    return view('admin/session/login-session');
})->name('login');