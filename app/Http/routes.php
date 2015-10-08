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

use App\Example\Scientist;


Route::get('/', function () {
    $scientist = new Scientist(
        'Albert',
        'Einstein'
    );

    EntityManager::persist($scientist);
    EntityManager::flush();

    echo "Branch2";
});
