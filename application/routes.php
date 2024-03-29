<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', array('as' => 'home' , function()
{
	return View::make('home.index');
}));

Route::get('about', array('as' => 'about' , function()
{
	return View::make('home.about');
}));

Route::get('contact', array('as' => 'contact' , function()
{
	return View::make('home.contact');
}));

Route::post('contact', array('as' => 'contact', function()
{
	// get input
	$input = Input::all();
	// create rules for the inputs
	$rules = array(
		'name' => 'required',
		'email' => 'required|email',
		'message' => 'required'
	);

	// create validator with input and rules
	$validation = Validator::make($input, $rules);

	// check if validation fails if so redirect with errors
	if($validation->fails()) {
		return Redirect::to_route('contact')->with_errors($validation);
	}

	// if not send email
	$to = "lsualkimia@gmail.com";
	$subject = "Message from Contact Form";

	$headers = "From: lsualkimia.website@gmail.com\r\n";
	$headers .= "Reply-To: lsualkimia.website@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = $input['name']."\r\n".$input['email']."\r\n".$input['message'];
	
	if (mail($to, $subject, $message, $headers)) {
		//successful
		return Redirect::to_route('contact')->with('success', 'Your message was sent successfully.');
	} else {
		//error in sending message
		return Redirect::to_route('contact');
	}
}));

Route::get('login', array('as' => 'login', function() {
	return View::make('sessions.login');	
}));

Route::post('login', array('as' => 'login', function() {
	$input = Input::all();
	if(array_key_exists('remember', $input)) {
		$input['remember'] = true;
	} else {
		$input['remember'] = false;
	}

	if (Auth::attempt($input))
	{
		return Redirect::to_route('home');
	} else {
		return Redirect::to_route('login');
	}
}));

Route::get('logout', function() { 
	Auth::logout();
	return Redirect::to('/');
});

Route::filter('pattern: admin*', 'auth');

Route::controller('admin.users');
Route::controller('admin');

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});