<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
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
//Route that send back a view
Route::get('/', function () {  //在網頁顯示 welcome.blade.php 頁面
    return view('home',['pic_url'=>'', 'drug_name'=>'']);
});

Route::get('/search', 'App\Http\Controllers\PostController@search');

/*
//Route that send back a String
Route::get('/users', function () {  //在網頁顯示 welcome.blade.php 頁面
    return 'Hello Laravel';
});

//Route that send back an Array(JSON)
Route::get('/users/index', function () {  //在網頁顯示 welcome.blade.php 頁面
    return ['PHP', 'HTML', 'Laravel'];
});

//Route that send back an Object - JSON
Route::get('/users/index/object', function () {  //在網頁顯示 welcome.blade.php 頁面
    return response()->json([
        'PHP'=>7.0,
        'HTML'=>'none',
        'Laravel'=>'8.*'
    ]);
});

//Route::get('/', function () {  //在網頁顯示回傳 .env CREATOR_NAME 之值
//    return env('CREATOR_NAME');
//});
*/

