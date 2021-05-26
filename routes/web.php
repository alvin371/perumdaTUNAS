<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\GalleryController;


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
Route::get('/',[HomeViewController::class,'index']);
Route::get('/profile', [HomeViewController::class,'profile']);
Route::get('/berita', [HomeViewController::class,'berita']);
Route::get('/detailBerita/{detailberita}', [HomeViewController::class,'detailBerita']);
Route::get('/pengumuman', [HomeViewController::class,'pengumuman']);
Route::get('/detailPengumuman/{detailpengumuman}', [HomeViewController::class,'detailPengumuman']);
Route::get('/artikel', [HomeViewController::class,'artikel']);
Route::get('/detailArtikel/{detailartikel}', [HomeViewController::class,'detailartikel']);
Route::get('/layanan', [HomeViewController::class,'layanan']);

Route::get('/fasilitas', function () {
    return view('homeView/fasilitas');
});

Route::get('/produk', [HomeViewController::class,'produk']);



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
Route::get('/admin/profile/addTeam', [ProfileController::class,'createTeam']);
Route::post('/admin/profile/storeTeam',[ProfileController::class,'storeTeam']);

// Profile
Route::get('/admin/profile/editProfile/{profile}', [ProfileController::class,'editProfile']);
Route::patch('/admin/profile/profileUpdate/{profile}', [ProfileController::class,'profileUpdate']);


// Target Layanan, highlights, about us, produk

// Produk

Route::get('/admin/produk',[ProdukController::class,'index']);
Route::get('/admin/editProduk/{produk}', [ProdukController::class, 'show']);
Route::get('/admin/addProduk', [ProdukController::class, 'create']);
Route::post('/admin/produk/store', [ProdukController::class, 'store']);
Route::patch('/admin/produk/update/{produk}', [ProdukController::class, 'update']);
Route::delete('/admin/deleteProduk/{produk}', [ProdukController::class, 'destroy']);


// Layanan, Highglights,about us (Gallery)

Route::get('/admin/gallery',[GalleryController::class,'index']);
Route::get('/admin/gallery/layananAdd',[GalleryController::class,'addLayanan']);
Route::get('/admin/gallery/addHighlights',[GalleryController::class,'addHighlights']);
Route::get('/admin/gallery/editAbout/{gallery}',[GalleryController::class,'editAbout']);


// edit About
Route::patch('/admin/gallery/updateAbout/{gallery}',[GalleryController::class,'updateAbout']);
// storeLayanan
Route::post('/admin/gallery/layananStore', [GalleryController::class,'storeLayanan']);
// store Highglights
Route::post('/admin/gallery/highglightsStore',[GalleryController::class,'storeHighglights']);


// edit Layanan dan Highlights
Route::get('/admin/gallery/editLayanan/{gallery}',[GalleryController::class,'editLayanan']);
Route::patch('/admin/gallery/updateLayanan/{gallery}', [GalleryController::class,'updateLayanan']);

Route::get('/admin/gallery/editHighlights/{gallery}', [GalleryController::class,'editHighlights']);
Route::patch('/admin/gallery/updateHighlights/{gallery}',[GalleryController::class,'updateHighlights']);

// delete Layanan & Highlights

Route::delete('/admin/gallery/deleteHighlights/{gallery}', [GalleryController::class,'deleteHighlights']);
Route::delete('/admin/gallery/deleteLayanan/{gallery}', [GalleryController::class, 'deleteLayanan']);
});