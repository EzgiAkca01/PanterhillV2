<?php

use Illuminate\Http\Request;
use  \App\Person;
use \App\Device;
use \App\Http\Resources\Person as PersonResource;
use \App\Http\Resources\VwPerson as VwPersonResource;
use \App\Http\Resources\Device as devices;
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
   /* $user = $request->get('IdMD5',$request);

    $user = \App\User::where('IdMD5',''.$user.'')
        ->first();
*/
    return $request->user();
});

Route::get('/doors', function (Request $request) {
    $result = Device::all();

    return \App\Http\Resources\Device::collection($result);
});


Route::middleware('auth:api')->post('/login',function (Request $request){

    try {
        $result=\App\VwPerson::where('IdMD5',$request->input('IdMD5'))->value('Id');
        if($result == null)
        {



            return ['success' => false, 'message' => 'No variable'];


        }else
        {

            Person::where('Id', $result)->update(array('created_at' => now()));
            return ['success' => true, 'message' => 'Welcome to Panterhill Apartments'];

        }
    } catch(\Illuminate\Database\QueryException $ex){
        return ['false' => true, 'message' => $ex->getMessage()];
    }


});





Route::middleware('auth:api')->get('/search_plate/{plate}',function ($plate)
{

    $result = App\Person::where('plate', $plate)
        ->orderBy('name', 'desc')
        ->take(10)
        ->get();

    return PersonResource::collection($result);


});






/*Route::middleware('auth:api')->get('/doors', function (Request $request) {
    return $request->devices();
});*/




