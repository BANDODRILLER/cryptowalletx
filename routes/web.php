<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/account', [HomePageController::class, 'recharge'])->name('recharge');
Route::get('/mpesa', [HomePageController::class, 'mpesa'])->name('mpesa');
Route::get('/withdrawmpesa', [HomePageController::class, 'withdrawmpesa'])->name('withdrawmpesa');
Route::get('/services', [HomePageController::class, 'services'])->name('services');
Route::get('/invite', [HomePageController::class, 'invite'])->name('invite');
Route::get('/productdetail', [HomePageController::class, 'productdetail'])->name('productdetail');
Route::get('/personal', [HomePageController::class, 'personal'])->name('personal');
Route::get('/products', [HomePageController::class, 'products'])->name('products');
Route::get('/myproducts', [HomePageController::class, 'myproducts'])->name('myproducts');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/myteam', [HomePageController::class, 'myteam'])->name('myteam');
Route::get('/purchase', [HomePageController::class, 'purchase'])->name('purchase');
Route::post('depositmpesa', [HomePageController::class, 'depositmpesa'])->name('depositmpesa');
Route::get('/mpesatransaction', [AdminController::class, 'mpesatransaction'])->name('mpesatransaction');
Route::get('fixaccount', [AdminController::class, 'fixaccount'])->name('fixaccount');
Route::get('fixaccountded', [AdminController::class, 'fixaccountded'])->name('fixaccountded');
Route::get('/mpesawithdraw', [HomePageController::class, 'mpesawithdraw'])->name('mpesawithdraw');
Route::post('/mpesawithdrawal', [HomePageController::class, 'mpesawithdrawal'])->name('mpesawithdrawal');
Route::get('removingcash', [AdminController::class, 'removingcash'])->name('removingcash');
Route::get('/transactions', [HomePageController::class, 'transactions'])->name('transactions');
Route::get('cancelfixaccount', [AdminController::class, 'cancelfixaccount'])->name('cancelfixaccount');
Route::post('/contact', [HomePageController::class, 'sendEmail'])->name('contact.send');
Route::get('/congratulations', [HomePageController::class, 'congratulations'])->name('congratulations');
Route::post('/redeem', [HomePageController::class, 'redeem'])->name('redeem');
Route::get('/activeusers', [AdminController::class, 'users'])->name('users');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [HomePageController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomePageController::class, 'index'])->name('index');
