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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data['navs'] = [
        'About', 'Contact', 'Galery'
    ];
    return view('Home', $data);
});

Route::get('/About', function (){
    return view('About');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Galery', function () {
    return view('Galery');
});
