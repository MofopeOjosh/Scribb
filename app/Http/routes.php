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

Route::auth();

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/profile/{user_id}', 'HomeController@profile');

Route::get('/', 'ScenariosController@index');

Route::get('/home', 'ScenariosController@index');

Route::get('back', function () {
    return back();
});

//Scenario

Route::get('scenario/', 'ScenariosController@index');

Route::get('scenario/createpost', 'ScenariosController@create');

Route::post('scenario/createpost', 'ScenariosController@store');

Route::get('scenario/{id}', 'ScenariosController@show');

Route::get('scenario/{id}/edit', 'ScenariosController@edit');

Route::patch('scenario/{id}/edit', 'ScenariosController@update');

Route::get('scenario/{id}/delete', 'ScenariosController@destroy');

//Words

Route::get('scenario/{scenario}/addword', 'WordsController@create');

Route::post('scenario/{scenario}/addword', 'WordsController@store');

Route::get('word/{id}/edit', 'WordsController@edit');

Route::patch('word/{id}/edit', 'WordsController@update');

Route::get('word/{id}/delete', 'WordsController@destroy');


// Route::get('back', function(){
//     return redirect()->back();
// });
// Route::get('/addword', function () {
//     return view('addword');
// // });
// Route::get('scenario/createpost', function () {
//     return view('createpost');
// });

//static pages
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/addword', function () {
    return view('addword');
});




