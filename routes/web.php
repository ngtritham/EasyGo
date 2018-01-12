<?php

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
    return view('about');
})->name('AboutPage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('homepage', 'HomeController@getView')->name('HomePage');

Route::group(['prefix' => 'home'], function(){
	Route::post('post', 'HomeController@post')->name('PostPage');
	Route::get('getQuan', 'HomeController@getQuan')->name('GetQuanPage');
	Route::get('getPhuong', 'HomeController@getPhuong')->name('GetPhuongPage');

	Route::post('sendOffer', 'HomeController@sendOffer')->name('SendOfferPage');
});

Route::group(['prefix' => 'user'], function () {
	Route::get('login', 'UserController@loginView')->name('LoginPage');
	Route::post('loginVe', 'UserController@loginVerify')->name('LoginVerifyPage');

	Route::get('register', 'UserController@registerView')->name('RegisterPage');
	Route::post('registerVe', 'UserController@registerVerify')->name('RegisterVerifyPage');

	Route::get('avatar', 'UserController@avatar')->name('AvatarPage');
	Route::post('upava', 'UserController@upAvatar')->name('UpAvatarPage');

	Route::get('logout', 'UserController@logout')->name('LogoutPage');
});