<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('registracija', function()
{


	if(Input::has('username')){
		$username = Input::get('username');
	}else{
		return "Parameter 'username' required.";
	}

	if(Input::has('password')){
		$password = Input::get('password');
	}else{
		return "Parameter 'password' required.";
	}

	$result = DB::select('call registracija_korisnika(?,?)',
		array($username,$password)
	);

	return $result;

});

Route::post('prijava', function()
{


	if(Input::has('username')){
		$username = Input::get('username');
	}else{
		return "Parameter 'username' required.";
	}

	if(Input::has('password')){
		$password = Input::get('password');
	}else{
		return "Parameter 'password' required.";
	}

	$result = DB::select('call prijava_korisnika(?,?)',
		array($username,$password)
	);

	return $result;

});

Route::get('home', function()
{
	return View::make('bok');
});
