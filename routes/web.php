<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BranchController;

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

Route::get('/', function () {
    return view('branch.index');
});


Route::resource('business', 'App\Http\Controllers\BusinessController');
Route::resource('branch', 'App\Http\Controllers\BranchController');
// Route::resource('branch', 'BranchController');