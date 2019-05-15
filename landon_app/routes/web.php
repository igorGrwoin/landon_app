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

//Load home page
Route::get('/', 'ContentsController@home');

Route::get('/clients', 'ClientController@index');
Route::get('/clients/new', 'ClientController@newClient');
Route::post('/clients/new', 'ClientController@create');
Route::get('/clients/{client_id}', 'ClientController@show');
Route::post('/clients/{client_id}', 'ClientController@modify');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom');




//About page shows json text
Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '0.1.1';

    return $response_arr;
    #return view('welcome');
});

//home page shows data loaded in variable
Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

//di page shows dependecy injection example 
Route::get('/di', 'ClientController@di');

//facades/db shows a simulation of db connection
Route::get('/facades/db', function () {
    return DB::select('SELECT * from table');
    //error no db configured
});

//Shous encypt with facades
Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

//Shows decrypt with facades
Route::get('/facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6Im5Hc2FvZGJnUXVxZWxYN3Zab0djQkE9PSIsInZhbHVlIjoiTktsVlNFcUlBWTdYbzVPcHR2Z1VDdWRCWlVhZE5DSUVWWk9SMkdWT2V5Zz0iLCJtYWMiOiI3OGQ3ZmU5ZWRlZGQ3YzJlOTJjMmNhODE0ZThmNTc0ZmEzZmQ1ZTIwYzQyMzVlYWJhMjdiYzI1NjI4MmE1NTgyIn0=');
});





