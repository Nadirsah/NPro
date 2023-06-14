<?php

use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\Ayarlar;
use App\Http\Controllers\Back\Profil;
use App\Http\Controllers\Back\Excel;
use App\Http\Controllers\Back\Mal_alis;
use App\Http\Controllers\Back\Techizatci;
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
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('postlogin');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::name('dashboard')->get('/', function () {
    return view('back.dashboard');
    });
    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
    //Ayarlar
    Route::resource('/ayarlar',Ayarlar::class);
    //Profil
    Route::resource('/profil',Profil::class);
    Route::get('/delete/{id}', [Profil::class, 'delete'])->name('delete');

    //Excel
    Route::get('/excel',[Excel::class,'index'])->name('excel');

     //Mal alisi
     Route::resource('/mal_alis',Mal_alis::class);
     Route::get('/deletemal/{id}', [Mal_alis::class, 'delete'])->name('delete.mal');

     //techizatci
     Route::resource('/techizatci',Techizatci::class);
     Route::get('/deletetechiz/{id}', [Techizatci::class, 'delete'])->name('delete.techiz');
     
});

Route::get('/error',function(){
    return view('error');
});

Route::get('users-export', [Profil::class, 'export'])->name('users.export');
Route::post('users-import', [Profil::class, 'import'])->name('users.import');
