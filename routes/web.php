<?php

use App\Events\NewOrderReceived;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\BroadcastException;
use Illuminate\Support\Facades\Log;

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




Route::get('/test-notify', function () {
    \Log::info('🧪 เรียก /test-notify แล้ว');
    broadcast(new NewOrderReceived('🛎️ แจ้งเตือนใหม่เข้ามาแล้ว! ' . now()));
    return 'ส่ง event แล้ว';
});

Route::get('/notify', function () {
    return view('notify');
});