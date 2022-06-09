<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TampilguruController;

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

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


//hak akses
Route::group(['middleware'=>['auth','hakakses:admin']], function(){
    Route::get('/guru', [GuruController::class,'index'])->name('guru');
});


//dashboard
Route::get('/main', function () {
    $jumlahguru = Guru::count();
    $jumlahkelas = Kelas::count();
    $jumlahagenda = Agenda::count();
    $jumlahmapel = Mapel::count();
    return view('dashboard', compact('jumlahguru','jumlahkelas','jumlahagenda','jumlahmapel'));
})->middleware('auth');


// table guru
Route::get('/tambahguru', [GuruController::class,'tambahguru'])->name('tambahguru');
Route::post('/insertdata', [GuruController::class,'insertdata'])->name ('insertdata');

Route::get('/editguru/{id}', [GuruController::class,'editguru'])->name ('editguru');
Route::post('/updatedata/{id}', [GuruController::class,'updatedata'])->name ('updatedata');

Route::get('/delete/{id}', [GuruController::class,'delete'])->name ('delete');


// table kelas
Route::get('/kelas', [KelasController::class,'index'])->name('kelas')->middleware('auth');

Route::get('/tambahkelas', [KelasController::class,'tambahkelas'])->name('tambahkelas');
Route::post('/insertdatakelas', [KelasController::class,'insertdatakelas'])->name ('insertdatakelas');

Route::get('/editkelas/{id}', [KelasController::class,'editkelas'])->name('editkelas');
Route::post('/updatekelas/{id}', [KelasController::class,'updatekelas'])->name ('updatekelas');

Route::get('/deletekelas/{id}', [KelasController::class,'deletekelas'])->name ('deletekelas');


// table agenda
Route::get('/agenda', [AgendaController::class,'index'])->name('agenda')->middleware('auth');

Route::get('/tambahagenda', [AgendaController::class,'tambahagenda'])->name('tambahagenda');
Route::post('/insertdataagenda', [AgendaController::class,'insertdataagenda'])->name('insertdataagenda');

Route::get('/editagenda/{id}', [AgendaController::class,'editagenda'])->name('editagenda');
Route::post('/updateagenda/{id}', [AgendaController::class,'updateagenda'])->name('updateagenda');

Route::get('/deleteagenda/{id}', [AgendaController::class,'deleteagenda'])->name ('deleteagenda');


//mapel
Route::get('/mapel', [MapelController::class,'index'])->name('mapel')->middleware('auth');

Route::get('/tambahmapel', [MapelController::class,'tambahmapel'])->name('tambahmapel');
Route::post('/insertdatamapel', [MapelController::class,'insertdatamapel'])->name('insertdatamapel');

Route::get('/editmapel/{id}', [MapelController::class,'editmapel'])->name('editmapel');
Route::post('/updatemapel/{id}', [MapelController::class,'updatemapel'])->name('updatemapel');

Route::get('/deletemapel/{id}', [MapelController::class,'deletemapel'])->name ('deletemapel');


//tampilan guru
Route::get('/viewguru', [TampilguruController::class,'viewguru'])->name ('viewguru')->middleware('auth');

Route::get('/tambahviewguru', [TampilguruController::class,'tambahviewguru'])->name('tambahviewguru');
Route::post('/insertdataviewguru', [TampilguruController::class,'insertdataviewguru'])->name('insertdataviewguru');
