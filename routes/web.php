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

/*
Route::get('/about', function(){

    return "This is about page";
});

Route::get('/contact',function ()
{

    return"This is contact page";
});

Route::get('/post/{id}/{username}', array('as'=>'contact',function ($id,$user)
{
    return "This is post ".$id."From sent".$user;

}));


Route::get('admin/post/example',array('as'=>'admin.home' ,function ()
{
    $url = route('admin.home');
    return "Click ". $url;

}));*/


//Route::resource('posts','PostsController');

Route::get('/contact','PostsController@contact');

Route::get('/posts/{id}/{name}/{password}','PostsController@show_my_posts');
