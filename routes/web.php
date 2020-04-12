<?php

use App\Http\Controllers\User\PageController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::group(['middleware' => ['auth:web'], 'namespace' => 'User'], function () {
    Route::get('/', 'PageController@Home');


    Route::post('/todo/add', 'TodoController@Add');
});
