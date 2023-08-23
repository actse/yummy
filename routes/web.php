<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

//=========================home page==================================
Route::get('/', function () {
    return Inertia::render('HomeCustomer');
});

//=========================customer page==============================
Route::get('/home_customer', function () {
    return Inertia::render('HomeCustomer');
});

Route::get('/menu_customer', function () {
    return Inertia::render('MenuCustomer');
});

Route::get('/cart_customer', function () {
    return Inertia::render('CartCustomer');
});

Route::get('/history_customer', function () {
    return Inertia::render('HistoryCustomer');
});

Route::get('/service_customer', function () {
    return Inertia::render('ServiceCustomer');
});
//=========================staff page=================================
Route::get('/home_staff', function () {
    return Inertia::render('HomeStaff');
});

Route::get('/manage_table_staff', function () {
    return Inertia::render('ManageTableStaff');
});

Route::get('/create_product', function () {
    return Inertia::render('CreateProduct');
});
//=========================safe page==================================
Route::get('/home_safe', function () {
    return Inertia::render('HomeSafe');
});
//=========================owner page==================================
Route::get('/list_product', function () {
    return Inertia::render('ListProduct');
});


Route::get('/get_data', function () {
    return [
        "title" => "this is title",
        "body" => "Here is body",
    ];
});

// Route::get('/insert_cart', [OrderController::class,'addToCart']);
Route::post('/insert_cart', [OrderController::class,'addToCart']);
Route::post('/fetch_cart', [OrderController::class,'fetchCart']);
Route::post('/confirm_cart', [OrderController::class,'confirm']);
Route::post('/delete_order', [OrderController::class,'deleteOrderCart']);
Route::post('/fetch_order_history', [OrderController::class,'fetchConfirmStatus']);

Route::post('/create_product', [ProductController::class,'addNewProduct']);
Route::get('/fetch_product', [ProductController::class,'fetchProduct']);
Route::post('/create_package', [PackageController::class,'addNewPackage']);
Route::get('/fetch_package', [PackageController::class,'fetchPackage']);
Route::post('/create_type_product', [TypeProductController::class,'addNewTypeProduct']);
Route::post('/create_type_producttopackage', [TypeProductController::class,'addTypeProductidtoPackage']);
Route::get('/fetch_type_product', [TypeProductController::class,'fetchTypeProduct']);

Route::get('/fetch_list_typeproduct', [ListProductController::class,'fetch_list_typeproduct']);
Route::get('/fetch_list_product', [ListProductController::class,'fetch_list_product']);
Route::post('/edit_product', [ListProductController::class,'edit_product']);
Route::post('/delete_product', [ListProductController::class,'delete_product']);

Route::get('/home', function () {
    return Inertia::render('HomePage');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('Test');
})->middleware(['auth', 'verified'])->name('test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
