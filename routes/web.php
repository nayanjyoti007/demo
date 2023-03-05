<?php

use App\Http\Controllers\ForgetPassController;
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

Route::get('/', [ForgetPassController::class, 'index'])->name('reset');
Route::post('/forget', [ForgetPassController::class, 'forgotpasswordmailSend'])->name('forgotpasswordmailSend');
Route::get('/updatepassword/{email}/{token}', [ForgetPassController::class, 'updatepassword'])->name('updatepassword');
Route::post('/reset', [ForgetPassController::class, 'passwordreset'])->name('auth.passwordreset');
