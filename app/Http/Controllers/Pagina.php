<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina extends Controller
{

public function login(){
   return view('admons.login',
['title'=> 'Login']);
    }

public function inicio(Request $request){
    return view('admons.lex');
    }

public function frida(){
    return view('frida',
    ['title'=>'Frida Kahlo',
    'texto'=>'']);
    }
public function vincent(){
    return view('vincent',
    ['title'=>'Vincent Van Gogh',
    'texto'=>'']);
    }
public function leo(){
    return view('leonardo',
    ['title'=>'Leonardo da Vinci',
    'texto'=>'']);
    }
public function tamara(){
    return view('tamara',
    ['title'=>'Tamara de Lempicka',
    'texto'=>'']);
    }}
