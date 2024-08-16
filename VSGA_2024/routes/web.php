<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\halloController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\WelcomeController;
use illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/hello', function(){
    return 'hello VSGA';
});
Route::get('/word', function(){
    return 'hello Dunia';
});
Route::get('/about', function(){
    return 'NIM : 2231740001';
});
Route::get('/user/{name}', function($name){
    return 'Nama Saya '.$name;
});
Route::get('/posts/{post}/{comment}', function($post,$comment){
    return 'Pos ke-' . $post . "Komentar ke-:" . $comment;
});
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' . $name;
});
Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia'){
    return "kode barang $jk dan nama barang $mrk";
});