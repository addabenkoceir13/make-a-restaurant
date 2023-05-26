<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SpecialiteController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
Route::get('/', [HomeController::class, 'index']);





// Router For Admin page
Route::middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('admin/dashboard', [DashboardController::class , 'index']);
    // Router for Specialite
    Route::get('admin/specialite' , [SpecialiteController::class, 'index']);
    //
    Route::get('admin/specialite/ajouter', [SpecialiteController::class , 'indexAdd'])->name('specialite.ajouter');
    //
    Route::post('add-specialite', [SpecialiteController::class, 'addSpe'])->name('add.specialite');
    //
    Route::post('admin/supprimer-specialite/{id}', [SpecialiteController::class , 'dropSpe'])->name('supp.specialite');
    //
    Route::get('admin/modifer-specialite/{id}', [SpecialiteController::class, 'indexEdit'])->name('index.edit.specialite');
    //
    Route::post('admin/modifer/{id}', [SpecialiteController::class , 'editSpe'])->name('edit.specialite');

});
