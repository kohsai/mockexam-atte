<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\AttendanceController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('index');
});

//  認証不要なルート
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register',
[AuthController::class, 'store'])->name('register.store');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');


//  認証が必要なルート
Route::middleware('auth')->group
(function ()
{
Route::get('/', [AttendanceController::class, 'index'])->name('dashboard');
// ログイン後のリダイレクト: AuthControllerのstoreメソッドとauthenticateメソッドで、ログイン成功後にdashboardにリダイレクトする。

Route::get('/attendance', [AttendanceController::class,'attendance']);
}
);




