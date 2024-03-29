<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/courseList',[HomeController::class,'courseList']);
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/view_course',[AdminController::class,'view_course']);
route::post('/add_course',[AdminController::class,'add_course']);
route::get('/show_course',[AdminController::class,'show_course']);
route::get('/delete_course/{id}',[AdminController::class,'delete_course']);
route::get('/update_course/{id}',[AdminController::class,'update_course']);
route::post('/update_course_confirm/{id}',[AdminController::class,'update_course_confirm']);
route::get('/course_details/{id}',[HomeController::class,'course_details']);
route::post('/hire_now/{id}',[HomeController::class,'hire_now']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
route::get('/cash_order',[HomeController::class,'cash_order']);
route::get('/stripe/{totalfee}',[HomeController::class,'stripe']);
Route::post('/stripe/{totalfee}',[HomeController::class, 'stripePost'])->name('stripe.post');
route::get('/transaction',[AdminController::class,'transaction']);
route::get('/amIPaid/{id}',[AdminController::class,'amIPaid']);
