<?php

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
Route::get('/kodebarang/{jenis}/{merek?}',function ($jk='k01',$mrk='noki'){
    return "kode barang $jk dan nama barang $mrk";
});
