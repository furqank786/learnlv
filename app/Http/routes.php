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

// Route::get('/', function () {
//     return view('welcome');
// });


	/*----- I used virtual host and mentioned path to the public directory in project-----*/


	/*
	|--------------------------------------------------------------------------
	| global validation for id and name 
	|--------------------------------------------------------------------------
	|
	| Applied validation using regular expression to display the id and name in
	| correct format
	|
	*/

    $router->pattern('id', '[0-9]+');
    $router->pattern('name', '[A-Za-z]+');

	/*
    |--------------------------------------------------------------------------
    | Check environment
    |--------------------------------------------------------------------------
    |
    | Get the the local environment 
    |
    */
Route::get('/','WelcomeController@index');
// Route::get('contact','WelcomeController@contact');
	/*
    |--------------------------------------------------------------------------
    | Passing variable in url and print on the screen
    |--------------------------------------------------------------------------
    |
    | Pass an numeric variable id with range mentioned in above regular expression and 
    | displayed on the screen
    |
    */
Route::get('/contact/{id}', function($id){
	return 'Contact Id '. $id;
});
	/*
    |--------------------------------------------------------------------------
    | Passing a string variable in url and print on the screen
    |--------------------------------------------------------------------------
    |
    | Pass a variable name with range mentioned in above regular expression and 
    | displayed on the screen
    |
    */
Route::get('/contact/{name}', function($name){
	return 'Contact Name '. $name;
});
	/*
    |--------------------------------------------------------------------------
    | Passing multiple variables in url and print on the screen
    |--------------------------------------------------------------------------
    |
    | Pass multiple variable name with range mentioned in above regular expression and 
    | displayed on the screen
    |
    */
Route::get('/contact/{first}/{last}', function($first,$last){
	return 'First Name is '. $first.'<br>'. 'Last Name is '. $last;
});
	/*
    |--------------------------------------------------------------------------
    | Group routing
    |--------------------------------------------------------------------------
    |
    | Explore and implement group routing for the controller pages and action contact 
    | a text displayed on the screen
    |
    */
Route::group(['prefix'=> 'pages'],function(){
	Route::get('contact',function(){
		return 'this is pages--contact';
	});
});

// Route::get('/about','PagesController@about');

	/* Applied tempalte on this page */

	Route::get('contact','PagesController@contact');
	/*
    |--------------------------------------------------------------------------
    | This page has control structure passing and print arrays with variables and a table
    |--------------------------------------------------------------------------
    |
    | This action will display mixed type of structure control structure example, table and  
    | arrays using validations  also applied template
    | url: http://project_director/about/software%20engineer/2005
    */
Route::get('/about/{designation}/{year}','PagesController@about');

//middleware

 Route::get('pages/display/{age}', ['middleware' => 'cutomMiddle', function ($age) {
    return view('pages.display',['age' => $age]);
}]);