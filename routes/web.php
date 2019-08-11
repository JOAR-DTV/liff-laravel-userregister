<?php

use App\User;
use Illuminate\Http\Request;

/**
* ユーザー表示(userregister.blade.php)
*/
Route::get('/', function () {
    //books.blade.phpを読み込む
});

/**
* 人を追加：処理
*/
Route::post('/userregister', 'UsersController@store');

Route::get('/', 'UsersController@index');

Route::get('/thx', 'UsersController@thx');

/**
* 人を削除：処理
*/
Route::delete('/book/{book}', function (Book $book) {
    //
});
