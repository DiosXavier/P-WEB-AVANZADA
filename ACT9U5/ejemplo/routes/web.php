<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

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

Route::get('saludo/{name}',function($name){
    
    echo "HOLA ".$name;
});

Route::get('suma/{num1}/{num2}/{num3?}',function($num1,$num2,$num3=0){
    echo $num1 + $num2 + $num3;
}) -> where(['num1'=> '[0-9]+','num2'=> '[0-9]+']);


Route::post('suma/',function(Request $request){
    echo $num1 + $num2 + $num3;
}) -> where(['num1'=> '[0-9]+','num2'=> '[0-9]+']);


route::get('users/',[UserController::class,'index']);

route::get('users/create',[UserController::class,'create']);

route::get('users/{id}',[UserController::class,'show']);

route::post('users/',[UserController::class,'store']);

route::get('clients/',[ClientController::class,'index']);

route::get('clients/{id}',[ClientController::class,'show']);


