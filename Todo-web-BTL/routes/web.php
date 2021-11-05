<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Register;
use App\Http\Controllers\InforUser;
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

Route::get('/profile',[InforUser::class,'profileuser'] );

//check session tồn tại 
Route::get('/login', function () {
    if(session()->has('acc')){
        return redirect('profile');
    }
    return view('login');
});
Route::get('/login', function () {
    if(session()->has('acc')){
        return redirect('admin');
    }
    return view('login');
});
Route::get('/admin', [Admin::class,'viewPage']);
// Route::get('/admin','adminpage');
//remove session khi bấm logout
Route::get('/logout', function () {
    if(session()->has('acc')){
        session()->forget('acc');
    }
    return redirect('login');
});
//Hiển thị register
Route::get('/registerAccount',function (){
    return view('register');
});
//remove session khi chuyen qua vao registerAccount
Route::get('/register', function () {
    if(session()->has('acc')){
        session()->forget('acc');
    }
    return redirect('registerAccount');
});
//Khi method post lên /register thì sẽ thực thi checkvalid
Route::post('/register', [Register::class,'viewReg']);

//view shedule tan
Route::get('/schedule', function () {
    if(session()->has('acc')){
        return view('schedule');
    }
});
//view schedule details hang
Route::get('/schedule/details', function () {
    if(session()->has('acc')){
        return view('scheduledetails');
    }
});