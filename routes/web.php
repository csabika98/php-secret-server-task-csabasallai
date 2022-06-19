<?php

use Illuminate\Support\Facades\Route;
use App\Models\secretDb;

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


Route::get('/new',function(){
   return view('newsecret');
});

//Route::get('/create', function (){
//    return view('create');
//});

Route::get('/', function () {
    return view('welcome');
});



//Route::post("/savedb", function (){
//    secretDb::create([
//        'secretText' => request('SecretText')
//    ]);
//    return redirect("/create");

//});
