<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
#views
Route::get('/nth-view1',function(){
    return view('nth-view1',['name'=>'K23CNT3-Trọng Hưng-PJ1']);
});
Route::get('/nth-view2',function(){
    return view('nth-view2',[
        'name'=>'K23CNT3-Trọng Hưng-PJ1',
        'array'=>[ ]
    ]);
});
Route::get('/nth-view3',function(){
    return view('nth-view3',[
        'name'=>["K23","CNT3","Nguyễn Trọng Hưng"],
        'arr'=>[12,22,33,44,55 ],
        'users'=>[]
    ]);
});*/
Route::get('/', [ProductController::class,'index']);