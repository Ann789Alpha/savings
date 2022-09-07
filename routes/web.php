<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavingsController;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/fund', function () {
    return view('fund.f_fund');
});
Route::get('/stock', function () {
    return view('stock.f_stock');
});
Route::get('/namestock', function () {
    return view('type.add_name_stock');
});




Route::get('/addtype',[SavingsController::class,'form_add']);
Route::post('/addtype',[SavingsController::class,'add'])->name('add');
Route::get('/edit/{id}',[SavingsController::class,'edit'])->name('edit');
Route::post('/update/{id}',[SavingsController::class,'update'])->name('update');
Route::get('/del/{id}',[SavingsController::class,'del'])->name('delete');


Route::get('/addfund',[SavingsController::class,'formfund']);
Route::post('/addfund',[SavingsController::class,'addfund']);
Route::get('/list_fund', [SavingsController::class,'list_fund']);

Route::get('/addstock', [SavingsController::class,'formstock']);
Route::post('/addstock',[SavingsController::class,'addstock']);
Route::get('/list_buysell_stock', [SavingsController::class,'list_stock']);

Route::get('/add_dividend', [SavingsController::class,'form_dividend']);
Route::post('/add_dividend',[SavingsController::class,'add_dividend']);

Route::get('/dividend', function () {
    return view('stock.dividend_total');
});
Route::get('/dividen_report', function () {
    return view('stock.dividend');
});
Route::get('/summary', function () {
    return view('stock.summary');
});
