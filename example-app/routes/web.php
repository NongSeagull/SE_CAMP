<?php

use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  //:: เรียก static function
    return view('welcome'); //welcome.blade.php
});

Route::get('/my-route', function(){
    /*return view('myRoute');*/ //เรียกแค่ไฟล์
    //                   Key => Value
    $data = ['val_a' => 'Hello World!']; //สร้าง array แบบ Key&Value
    $data['val_b'] = "Laravel";
    return view('myFolder.myPage',$data); //เรียกไฟล์และโฟลเดอร์
});

Route::post('/my-route', function(Request $req){
     $data['myInput'] = $req->input('myInput');
    return view('myRoute', $req->input(),$data);
});
