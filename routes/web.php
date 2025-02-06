<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/service', function () {
    return view('Service');
});
Route::get('/menu', function () {
    return view('Menu');
});
Route::get('/form',function(){
    return view('form');
});
Route::post('/addcontactdata',function(Request $request){
    return $request;
});
Route::get('/getsocialmedialink',function(){
    $result = DB::select(("SELECT * from `sociallink`"));
    return $result[1]->link;
});
