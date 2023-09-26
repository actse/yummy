<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderTaberController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SecondaryPackageController;



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

Route::get('/home_staff_2', function () {
    return Inertia::render('HomeStaff_2');
});

Route::get('/manage_table_staff', function () {
    return Inertia::render('ManageTableStaff');
});

Route::get('/create_product', function () {
    return Inertia::render('CreateProduct');
});

Route::get('/qr_code', function () {
    return Inertia::render('QRCode');
});
Route::get('/invoice', function () {
    return Inertia::render('Invoice');
});
Route::get('/receipt', function () {
    return Inertia::render('Receipt');
});
Route::get('/payment', function () {
    return Inertia::render('Payment');
});
//=========================safe page==================================
Route::get('/kitchen', function () {
    return Inertia::render('HomeChef');
});
//=========================owner page==================================
Route::get('/list_product', function () {
    return Inertia::render('ListProduct');
});
Route::get('/list_type_product', function () {
    return Inertia::render('ListTypeProduct');
});
Route::get('/list_package_product', function () {
    return Inertia::render('ListPackage');
});
Route::get('/list_staff', function () {
    return Inertia::render('ListStaff');
});

Route::get('/test', function () {
    return Inertia::render('Test');
});

Route::get('/test2', function () {
    return Inertia::render('Test_table');
});

Route::post('/insert_cart', [OrderController::class,'addToCart']);
Route::post('/fetch_cart', [OrderController::class,'fetchCart']);
Route::post('/confirm_cart', [OrderController::class,'confirm']);
Route::post('/delete_order', [OrderController::class,'deleteOrderCart']);
Route::post('/fetch_order_history', [OrderController::class,'fetchConfirmStatus']);

Route::post('/create_product', [ProductController::class,'addNewProduct']);
Route::get('/fetch_product', [ProductController::class,'fetchProduct']);

Route::post('/create_package', [PackageController::class,'addNewPackage']);
Route::get('/fetch_package', [PackageController::class,'fetchPackage']);
Route::post('/edit_package', [PackageController::class,'edit_package']);
Route::post('/delete_package', [PackageController::class,'delete_package']);

Route::post('/create_staff', [StaffController::class,'add_staff']);
Route::get('/fetch_staff', [StaffController::class,'fetch_staff']);
Route::post('/edit_staff', [StaffController::class,'edit_staff']);
Route::post('/delete_staff', [StaffController::class,'delete_staff']);

Route::post('/create_type_product', [TypeProductController::class,'addNewTypeProduct']);
Route::post('/create_type_producttopackage', [TypeProductController::class,'addTypeProductidtoPackage']);
Route::get('/fetch_type_product', [TypeProductController::class,'fetchTypeProduct']);
Route::post('/edit_type_product', [TypeProductController::class,'edit_type_product']);
Route::post('/delete_type_product', [TypeProductController::class,'delete_type_product']);

Route::get('/fetch_list_typeproduct', [ListProductController::class,'fetch_list_typeproduct']);
Route::get('/fetch_list_product', [ListProductController::class,'fetch_list_product']);
Route::post('/edit_product', [ListProductController::class,'edit_product']);
Route::post('/delete_product', [ListProductController::class,'delete_product']);

Route::post('/insert_secondary_package', [SecondaryPackageController::class,'insert']);
Route::get('/fetch_secondary_package', [SecondaryPackageController::class,'select']);
Route::post('/edit_secondary_package', [SecondaryPackageController::class,'edit']);
Route::post('/delete_secondary_package', [SecondaryPackageController::class,'delete']);

Route::get('/generateRandomString', [OrderTaberController::class,'generateRandomString']);
Route::get('/fetch_bills', [OrderTaberController::class,'select_bills']);
Route::post('/insert_bills', [OrderTaberController::class,'insert_table']);
Route::post('/edit_bills', [OrderTaberController::class,'edit_table']);
Route::post('/close_bills', [OrderTaberController::class,'edit_status_close']);
Route::post('/check_bills', [OrderTaberController::class,'payment_status_close']);
Route::post('/reserve_bills', [OrderTaberController::class,'reserve_table']);
Route::post('/confirm_bills', [OrderTaberController::class,'confirmreserve_table']);

Route::get('/create_table', [TableController::class,'create_table']);
Route::get('/fetch_table', [TableController::class,'select_table']);

Route::get('/list_menu', [MenuController::class,'list_menu']);
Route::get('/selectdatatable', [TableController::class,'selectdatatable']);
Route::get('/selectregistable', [TableController::class,'selectregistable']);

// Route::get('/testing', [TableController::class,'testing']);



Route::get('/home', function () {
    return Inertia::render('HomePage');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
