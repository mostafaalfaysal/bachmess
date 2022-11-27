<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\MemberController;
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
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'adminPanel'])->name('adminDash');
    Route::get('/master', [AdminController::class, 'master'])->name('master');
    Route::get('/members', [AdminController::class, 'member'])->name('member');
    Route::get('/AddMember', [AdminController::class, 'addMember'])->name('add-Member');
    Route::get('/members-list', [AdminController::class, 'membersList'])->name('member-list');
    Route::get('/make-payment', [AdminController::class, 'adminMakePay'])->name('admin-pay');
    Route::get('/meal', [AdminController::class, 'mealManage'])->name('meal-manage');
    Route::get('/mealReport', [AdminController::class, 'mealReport'])->name('meal-report');
    Route::get('/make-payment', [AdminController::class, 'makePayment'])->name('make-Payment');
    Route::get('/bills', [AdminController::class,'bills'])->name('bills');
    Route::get('/make-fine', [AdminController::class,'makeFine'])->name('make-Fine');
    Route::post('/adding-Member', [AdminController::class,'addingMember'])->name('addingMember');
    Route::post('/adding-Meal', [AdminController::class,'addingMeal'])->name('addingMeal');
    Route::post('/adding-bill', [AdminController::class, 'addingBill'])->name('addingBill');
});
Route::group(['prefix' => 'member'], function () {
    Route::get('/', [MemberController::class, 'memberPanel'])->name('memberDash');
    Route::get('/master', [MemberController::class, 'masterMember'])->name('masterMember');
    Route::get('/make-payment', [MemberController::class, 'memberMakePay'])->name('memberPay');
    Route::get('/meal', [MemberController::class, 'mealManage'])->name('mealManage');
    Route::get('/report', [MemberController::class, 'memberReport'])->name('memberReport');
    Route::get('/bills', [MemberController::class,'bills'])->name('bill');
});
