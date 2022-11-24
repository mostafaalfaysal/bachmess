<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;

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
    Route::get('/report', [AdminController::class, 'adminReport'])->name('admin-report');
    Route::get('/make-payment', [AdminController::class, 'makePayment'])->name('make-Payment');
    Route::get('/bills', [AdminController::class,'bills'])->name('bills');
    Route::get('/make-fine', [AdminController::class,'makeFine'])->name('make-Fine');
});
