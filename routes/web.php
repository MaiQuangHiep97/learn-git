<?php

use App\Events\Message;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test-notification', [TestController::class, 'index']);
Route::get('test', [TestController::class, 'test']);
Route::get('event', function(){
    event(new Message('Đây là tin nhắn'));
});

Route::get('listen', function(){
    return view('listen');
});
