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

Route::get('/', ['as' => 'home', function() {
    return view('index');
}]);

Route::get('works', ['as' => 'works', function () {
	return view ('works');
}]);

Route::get('about', ['as' => 'about', function () {
	return view ('about');
}]);

Route::get('services', ['as' => 'services', function () {
	return view ('services');
}]);

Route::get('contact', ['as' => 'contact.form', function() {
    return view ('contact');
}]);

Route::post('contact', ['as' => 'contact.submit', function() {
	
    $validation = validator(
    	request()->only('name', 'phone', 'email', 'message'),
    	[
    		'name' => 'required',
    		'phone' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]
    );

    if ($validation->passes()) {
    	Mail::to('info@visuallabmediaghana.com')->send(new App\Mail\Contact(request()));
        flash('thanks for dropping us a line, we will be with you in a gify!')->success();
    	return redirect()->route('contact.form');
    }

    return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();

}]);
