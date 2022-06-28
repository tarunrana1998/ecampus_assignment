<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('sorting', function () {
    return view('sorting');
});

Route::get('sql-query', function () {
    return view('sql');
});

Route::get('explode-string', function () {
    $str = "Edutra@Technologies@Noida,Noida@15@Edutra,15@Noida@Edutra";
    $row_arr = explode(',',$str);
    $arr = [];
    foreach($row_arr as $r){
        $arr [ ] = explode('@',$r);
    }
    return view('table', compact('arr'));
});


Route::post('sort-calculations', [App\Http\Controllers\SortController::class, 'sort_algo']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
