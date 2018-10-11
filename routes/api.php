<?php

use Illuminate\Http\Request;
use  \App\Person;
use \App\Device;
use \App\Http\Resources\Person as PersonResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('my_first_api','PostsController@my_first_api');


//List Persons
Route::get('persons','PersonController@index');


//List Single Person
Route::get('persons/{id}','PersonController@show');


//Create new person
Route::post('persons','PersonController@store');

//Update a person
Route::put('persons/{id}','PersonController@store');


//Delete a person
Route::delete('persons/{id}','PersonController@destroy');

Route::get('/json',function ()
{
$result = Person::find(1);


    return PersonResource::collection($result);

});

Route::get('/doors',function ()
{
    $result = Device::all();
    return \App\Http\Resources\Device::collection($result);

});


Route::get('/search_plate/{plate}',function ($plate)
{

    $result = App\Person::where('plate', $plate)
        ->orderBy('name', 'desc')
        ->take(10)
        ->get();

    return PersonResource::collection($result);


});




