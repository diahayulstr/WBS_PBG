<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('pages.admin.dashboard')->middleware('roles');

Route::get('/dashboard', 'App\Http\Controllers\MasyarakatController@index')->name('pages.masyarakat.index');
Route::get('/user/pengaduan', 'App\Http\Controllers\MasyarakatController@lihat')->name('pengaduan.show');
Route::post('/dashboard', 'App\Http\Controllers\MasyarakatController@store')->name('masyarakat.store');
Route::get('/user', 'App\Http\Controllers\MasyarakatController@index')->name('pages.masyarakat.index');
Route::get('/user/pengaduan/{pengaduan}', 'App\Http\Controllers\MasyarakatController@show')->name('pengaduan.show');
Route::get('/admin', 'App\Http\Controllers\DashboardController@index')->name('pages.admin.dashboard');
Route::get('/admin/pengaduans', 'App\Http\Controllers\PengaduanController@index');
Route::get('/admin/pengaduans/{pengaduans}', 'App\Http\Controllers\PengaduanController@show')->name('pengaduans.show');
Route::patch('/admin/pengaduans/{pengaduans}', 'App\Http\Controllers\PengaduanController@update')->name('pengaduans.update');
Route::delete('/admin/pengaduans/{pengaduans}', 'App\Http\Controllers\PengaduanController@destroy')->name('pengaduans.destroy');
Route::post('/admin/tanggapan', 'App\Http\Controllers\TanggapanController@store')->name('tanggapan.store');
Route::get('/admin/tanggapan/{tanggapan}', 'App\Http\Controllers\TanggapanController@show')->name('tanggapan.show');
Route::get('/admin/masyarakat', 'App\Http\Controllers\AdminController@masyarakat');
Route::get('/admin/petugas', 'App\Http\Controllers\PetugasController@index')->name('pages.admin.petugas.index');
Route::get('/admin/petugas/create', 'App\Http\Controllers\PetugasController@create')->name('petugas.create');
Route::post('/admin/petugas/store', 'App\Http\Controllers\PetugasController@store')->name('petugas.store');
Route::get('/admin/pengaduan/cetak', 'App\Http\Controllers\AdminController@cetak');
Route::get('/admin/pengaduan/cetak/{cetak}', 'App\Http\Controllers\AdminController@pdf');
Route::get('/admin/laporan', 'App\Http\Controllers\AdminController@laporan');
Route::get('/admin/laporan/cetak', 'App\Http\Controllers\AdminController@cetak');


// Admin/Petugas
/*
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/admin', 'App\Http\Controllers\DashboardController@index')->name('pages.admin.dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');

        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
});
*/

// Masyarakat
/*Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
				Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
                Route::resource('pengaduan', 'MasyarakatController');
                Route::get('pengaduan', 'MasyarakatController@lihat');
});*/





require __DIR__.'/auth.php';
