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

require_once '\Google\GoogleMaps\GoogleMapsSearch.php';

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/dvds/search', 'DvdController@getSearchMenuOptions');

Route::post('/dvds', 'DvdController@getResults');

Route::get('/dvds/create', 'DvdController@getInsertMenuOptions');

Route::post('/dvds/inserttemp', 'DvdController@putDvd');

Route::get('/maps/search', function()
{
    return View::make('GoogleMaps/search');
});

Route::post('/maps', function()
{
    $maps = new \Google\GoogleMaps\GoogleMapsSearch();

    //\Google\GoogleMaps\GoogleMapsSearch();
    $json = $maps->getResults(Input::get('address'));

//  dd($json);

    return View::make('GoogleMaps/results', [
        'map' => $json->results
    ]);

});




