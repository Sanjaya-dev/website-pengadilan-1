<?php

use App\Models\CrimeType;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrimeTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DefendantController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/crime-type', [CrimeTypeController::class,'index'])->name('crimeType');
Route::get('/crime-type/add', [CrimeTypeController::class,'create'])->name('addCrimeType');
Route::post('/crime-type/store',[CrimeTypeController::class,'store'])->name('crimeTypeStore');
Route::get('/crime-type/edit/{crimeType}',[CrimeTypeController::class,'edit'])->name('editCrimeType');
Route::put('/crime-type/update/{crimeType}',[CrimeTypeController::class,'update'])->name('crimeTypeUpdate');
Route::delete('/crime-type/delete/{crimeType}',[CrimeTypeController::class,'destroy'])->name('deleteCrimeType');

Route::get('/defendants',[DefendantController::class,'index'])->name('defendants');
Route::get('/defendants/add', [DefendantController::class,'create'])->name('addDefendant');
Route::post('/defendants/store',[DefendantController::class,'store'])->name('defendantStore');
Route::get('/defendants/edit/{defendant}',[DefendantController::class,'edit'])->name('editDefendant');
Route::put('/defendants/update/{defendant}',[DefendantController::class,'update'])->name('defendantUpdate');
Route::delete('/defendants/delete/{defendant}',[DefendantController::class,'destroy'])->name('deleteDefendant');
