<?php

use App\Http\Controllers\API\AcaraApiController;
use App\Http\Controllers\API\AngkatanApiController;
use App\Http\Controllers\API\ArticelApiController;
use App\Http\Controllers\API\JadwalSharingApiController;
use App\Http\Controllers\API\KategoriApiController;
use App\Http\Controllers\API\UserApiController;
use App\Http\Controllers\API\ApiDosenController;
use App\Http\Controllers\API\ApiStrukturhimtiController;
use App\Http\Controllers\API\SliderApiController;
use App\Http\Controllers\API\FooterApiController;

use App\Models\Articel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//authentikasi
Route::post('/Api-registrasi',[UserApiController::class,'register']);
Route::post('/Api-login', [UserApiController::class, 'login']);
Route::post('/Api-logout',[UserApiController::class,'logout']);
Route::post('/Api-LupaPassword',[UserApiController::class, 'lupapassword']);
Route::post('/Api-profile',[UserApiController::class,'profile']);
Route::PATCH('/Api-edit-profile/{id}',[UserApiController::class,'editProfile']);

//slider
Route::get('/Api-slider',[SliderApiController::class,'getDataSlider']);
Route::get('/Api-danus',[SliderApiController::class,'getSliderDanus']);
Route::get('/Api-merchan',[SliderApiController::class,'getMerchan']);

// footer
Route::get('/Api-footer', [footerApiController::class, 'getFooter']);


//kategori
Route::get('/Api-kategori', [KategoriApiController::class, 'kategori']);


//artikel
Route::get('/Api-Artikel-kategori/{id}', [ArticelApiController::class , 'getArtikelKategori']);
Route::get('/Api-detail-artikel/{id}', [ArticelApiController::class , 'getDetailArtikel']);
Route::get('/Api-all-artikel', [ArticelApiController::class,'getArtikel']);
Route::get('/Api-artikel-kampus', [ArticelApiController::class, 'getArtikelKampus']);


//acara

Route::get('/Api-acara',[AcaraApiController::class,'getAcaraHimti']);
Route::get('/Api-detail-acara/{id}',[AcaraApiController::class,'getDetailAcara']);

//Jadwal Sharing

Route::get('/Api-jadwal-sharing',[JadwalSharingApiController::class,'sharing']);
Route::get('/Api-detail-sharing/{id}',[JadwalSharingApiController::class,'getDetailsharing']);

// angkatan anggota
Route::get('/Api-angkatan-anggota',[AngkatanApiController::class,'anggotaAngkatan']);
Route::get('/Api-angkatan',[AngkatanApiController::class,'angkatan']);
Route::get('/Api-anggota-all',[AngkatanApiController::class,'getAnggota']);
Route::get('/Api-search-anggota',[AngkatanApiController::class,'SearchAnggota']);

//dosen
Route::get('/Api-dosen',[ApiDosenController::class,'getDataDosen']);
Route::get('/Api-dosen-search',[ApiDosenController::class,'searchDosen']);

//Struktur
Route::get('/Api-struktur-himti',[ApiStrukturhimtiController::class,'getStruktur']);
