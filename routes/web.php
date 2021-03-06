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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')-> name('contact');

Route::post('/contact', 'PagesController@contactpost')-> name('contact.post');

/* Code before implementing Controller part
 Route::post('/contact', function () {
    //dd(request());
    $data = request()->all();
    echo "Name: " . $data['name'] . '<br>';
    echo "Email: " . $data['email'] . '<br>';
    echo "Subject: " .$data['subject']. '<br>';
    echo "Message: " . $data['body'].'<br>';

});*/

Route::get('/signin','PagesController@signin')-> name('sign.in');

Route::get('/signup', 'PagesController@signup')->name('sign.up');

Route::get('/viewmessages', 'PagesController@viewmessages')->name('viewmessages');

Route::get('/viewcardmessage','PagesController@viewcardmessage')->name('viewcardmessage');

Route::get('/logout','PagesController@logout')->name('logout');

/* Can use for thank you message
 Route::post('/contact', 'PagesController@store')-> name('contact.store');
Route::get('/thanks/{name}/{email}', 'PagesController@thanks')-> name('thanks');*/
