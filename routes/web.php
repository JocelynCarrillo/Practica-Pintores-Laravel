<?php
use Illuminate\Support\Facades\Route;

Route::get('/','Pagina@login');

Route::get('/validar','Pagina@inicio');


Route::get('/Frida',[
    'uses' => 'Pagina@frida',
    'as' =>'frida'
]);
Route::get('/Vincent',[
    'uses' => 'Pagina@vincent',
    'as' =>'vincent'
]);
Route::get('/Leo',[
    'uses' => 'Pagina@leo',
    'as' =>'leo'
]);
Route::get('/Tamara',[
    'uses' => 'Pagina@tamara',
    'as' =>'tamara'
]);
