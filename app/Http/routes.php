<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Address;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function (){
    $user = User::findOrFail(1);

    $address = new Address(['name'=>'123 Houston Ave, New York, NY 12345']);

    $user->address()->save($address);
});