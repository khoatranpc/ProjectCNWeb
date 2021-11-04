<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
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
    return redirect('login');
});
// Route::get('/test', function () {
//     return view('test');
// });
//Thực hiện method post thành công sẽ chuyển direct /user, thực hiện hàm checkValid
Route::post('/user',[Login::class,'checkValid'])->middleware('checklogin');
// Route::get('/login', function () {
//     return view('login');
// });

// Route::view('/test','test');

Route::get('/profile', function () {
    if(session()->has('acc')){
        return view('profileuser');
    }
    // return view('test');
});
//view schedule
Route::get('/schedule', function () {
    if(session()->has('acc')){
        return view('schedule');
    }
    // return view('test');
});
//check session tồn tại 
Route::get('/login', function () {
    if(session()->has('acc')){
        return redirect('profile');
    }
    return view('login');
});

//remove session khi bấm logout
Route::get('/logout', function () {
    if(session()->has('acc')){
        session()->forget('acc');
    }
    return redirect('login');
});

