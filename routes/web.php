<?php

use App\Http\Controllers\Insert_CartController;
use App\Http\Controllers\ProfileController;
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
//=========================safe page==================================


Route::get('/get_data', function () {
    return [
        "title" => "this is title",
        "body" => "Here is body",
    ];
});

Route::post('/insert_cart', [Insert_CartController::class,'DataInsert']);
// Route::get('/insert_cart', [Insert_CartController::class,'DataInsert']);

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
