<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     // klo route itu ngikutin yg di php artisan route:list (table name, ex: kelas.index)
//     // klo view itu ngikutin nama folder dan file di explorer ku (ex: dalam folder kelas file indexKelas -> kelas.indexKelas)
//     return route('kelas.index');
// });

Route::get('/', [KelasController::class, 'index']);
Route::get('/list', [PageController::class, 'index']);

Route::resource('kelas', KelasController::class);
Route::resource('murid', MuridController::class);
