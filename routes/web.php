<?php

use App\Http\Controllers\Admin\admin_ticket;
use App\Http\Controllers\HomeContoroller;
use App\Http\Controllers\ticketing;
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

Route::get('/',[HomeContoroller::class,'index']);
Route::get('/login',[HomeContoroller::class,'login']);
Route::post('/login',[HomeContoroller::class,'login_post']);
Route::get('/sign-up',[HomeContoroller::class,'sign_up_view']);
Route::post('/sign-up',[HomeContoroller::class,'sign_up']);
Route::get('/FQ',[HomeContoroller::class,'frequenc_quetion']);
Route::get('/Ticketing',[ticketing::class,'ticket']);
Route::prefix('/admin')->group(function ()
{
    Route::get('/adobe', [admin_ticket::class,'adobe']);
    Route::get('/lesson_student',[admin_ticket::class,'lesson_student']);
    Route::get('/teacher', [admin_ticket::class,'teacher']);
    Route::get('/manager', [admin_ticket::class,'manager']);
});