<?php
// use App\VSE;
use App\Http\Controllers\testController;
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
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\welcomeController::class, "index"]);

Route::get('/Calender', [App\Http\Controllers\welcomeController::class, "calender"]);

Route::get('/Notice', [App\Http\Controllers\welcomeController::class, "notice"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/results', [App\Http\Controllers\resultcontroller::class, "index"]);

Route::get('/routine', [App\Http\Controllers\routinecontroller::class, "index"]);

Route::get('/admission', [App\Http\Controllers\admissioncontroller::class, "index"]);

Route::get('/admissionresults', [App\Http\Controllers\admissioncontroller::class, "result"]);

Route::get('/highlights', [App\Http\Controllers\admissioncontroller::class, "highlights"]);

Route::get('/admindashboard', [App\Http\Controllers\HomeController::class, "index"]);

Route::get('/studentprofiles', [App\Http\Controllers\admincontroller::class, "studentprofile"]);

Route::get('/teacherprofiles', [App\Http\Controllers\admincontroller::class, "teacherprofile"]);

Route::get('/resultsheets', [App\Http\Controllers\admincontroller::class, "resultsheet"]);

Route::get('/teacherdashboard', [App\Http\Controllers\HomeController::class, "index"]);

Route::get('/addresult', [App\Http\Controllers\resultcontroller::class, "upload"]);

Route::post('/addingresult', [App\Http\Controllers\resultcontroller::class, "uploadresult"]);

Route::get('/resultdelete/{id}', [App\Http\Controllers\resultcontroller::class, "resultdelete"]);

Route::get('/studentdelete/{id}', [App\Http\Controllers\admincontroller::class, "studentdelete"]);

Route::get('/teacherdelete/{id}', [App\Http\Controllers\admincontroller::class, "teacherdelete"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Route::get('/results', function () {
    //     return view('results');
    // })->name('results');
    // Route::get('/routine', function () {
    //     return view('routine');
    // })->name('routine');
    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');
});
