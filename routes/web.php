<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;


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
    return view('homeView/index');
});
Route::get('/profile', function () {
    return view('homeView/profile');
});
Route::get('/berita', function () {
    return view('homeView/berita');
});
Route::get('/pengumuman', function () {
    return view('homeView/pengumuman');
});
Route::get('/artikel', function () {
    return view('homeView/artikel');
});
Route::get('/layanan', function () {
    return view('homeView/layanan');
});
Route::get('/fasilitas', function () {
    return view('homeView/fasilitas');
});
Route::get('/produk', function () {
    return view('homeView/produk');
});


Route::get('/login', function(){
    return view('login.index');
})->name('login');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::group(['middleware'=>['auth']], function(){

// Berita Controller

Route::get('/admin/berita',[BeritaController::class, 'index']);
Route::get('/admin/berita/edit/{berita}',[BeritaController::class, 'show']);
Route::patch('/admin/berita/update/{berita}',[BeritaController::class, 'update']);
Route::get('/admin/berita/add',[BeritaController::class, 'create']);
Route::post('/admin/berita/create',[BeritaController::class, 'store']);
Route::delete('/admin/berita/delete/{berita}',[BeritaController::class, 'destroy']);


// Pengumuman Controller
Route::get('/admin/pengumuman',[PengumumanController::class, 'index']);
Route::get('/admin/pengumuman/edit/{pengumuman}',[PengumumanController::class, 'show']);
Route::patch('/admin/pengumuman/update/{pengumuman}',[PengumumanController::class, 'update']);
Route::get('/admin/pengumuman/add',[PengumumanController::class, 'create']);
Route::post('/admin/pengumuman/create',[PengumumanController::class, 'store']);
Route::delete('/admin/pengumuman/delete/{pengumuman}',[PengumumanController::class, 'destroy']);

// Artikel Controller
Route::get('/admin/artikel',[ArtikelController::class, 'index']);
Route::get('/admin/artikel/edit/{artikel}',[ArtikelController::class, 'show']);
Route::patch('/admin/artikel/update/{artikel}',[ArtikelController::class, 'update']);
Route::get('/admin/artikel/add',[ArtikelController::class, 'create']);
Route::post('/admin/artikel/create',[ArtikelController::class, 'store']);
Route::delete('/admin/artikel/delete/{artikel}',[ArtikelController::class, 'destroy']);

// User Controller

Route::get('/admin/user',[UserController::class, 'index']);
Route::get('/admin/user/edit/{user}',[UserController::class, 'show']);
Route::patch('/admin/user/update/{user}',[UserController::class, 'update']);
Route::get('/admin/user/add',[UserController::class, 'create']);
Route::post('/admin/user/create',[UserController::class, 'store']);
Route::delete('/admin/user/delete/{user}',[UserController::class, 'destroy']);


// Profile Controller

Route::get('/admin/profile',[ProfileController::class,'index']);

// direktur 
Route::get('/admin/profile/editDirektur/{profile}', [ProfileController::class,'editDirektur']);
Route::patch('/admin/profile/direkturUpdate/{profile}', [ProfileController::class,'direkturUpdate']);

// Team
Route::get('/admin/profile/editTeam/{profile}', [ProfileController::class,'editTeam']);
Route::patch('/admin/profile/teamUpdate/{profile}', [ProfileController::class,'teamUpdate']);
Route::get('/admin/profile/addTeam', [ProfileController::class,'addTeam']);
Route::post('/admin/profile/storeTeam',[ProfileController::class,'storeTeam']);

// Profile
Route::get('/admin/profile/editProfile/{profile}', [ProfileController::class,'editProfile']);
Route::patch('/admin/profile/profileUpdate/{profile}', [ProfileController::class,'profileUpdate']);
});