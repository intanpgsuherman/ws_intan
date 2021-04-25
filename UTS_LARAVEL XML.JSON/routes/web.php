<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('AdminLayout/index');
});


Route::post('/store-json','JsonController @ store');

Route::post('/laravel-json','JsonController @ index');

Route::get('/list', [HomeController::class, 'list'])->name('list');

Route::get('/matakuliah', [HomeController::class, 'matakuliah'])->name('matakuliah');

Route::get('/createdosen', [HomeController::class,'create']);

Route::post('/store', [HomeController::class,'store']);

Route::get('list/detail/{dosen:id}', [HomeController::class, 'detail']);

Route::patch('list/update/{dosen:id}', [HomeController::class, 'update']);

Route::delete('list/delete/{dosen:id}', [HomeController::class, 'delete']);

Route::get('/MyInformation', [HomeController::class, 'MyInformation'])->name('MyInformation');

Route::get('/list_json', [HomeController::class, 'list_json'])->name('list_json');

// Route::get('/list_json_db', [HomeController::class, 'list_json_db'])->name('list_json_db');

Route::get('/create_json', [HomeController::class,'create_json'])->name('create_json');


Route::get('/xml-data', [HomeController::class,'xml-data'])->name('xml-data');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
