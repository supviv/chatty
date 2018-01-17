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
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/bye', function () {
    return view('bye');
});

Route::post('/messages',function(){
	// Store the new message 
	$user = Auth::guest();
	// $message = request()->get('message');

	$user->messages()->create([
		'message' => request()->get('message')
	]);
	return ['status' => 'ok'];
	//return App\Message::with('user')->get();
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
