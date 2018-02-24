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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    //dd(request());
    $data = request()->all();
    echo "Name:" .$data['name']. '<br>';
    echo "Email: " . $data['email'] . '<br>';
    echo "Message: " . $data['body'].'<br>';

});

Route::get('/signin', function () {
    return view('pages.signin');
});

/*Route::get('/testsignin', function () {
    return view('pages.testsignin');
});*/

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});

Route::get('/viewcardmessage', function () {
    return view('pages.viewcardmessage');
});