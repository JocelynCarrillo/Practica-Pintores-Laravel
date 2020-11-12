@extends('layouts.master') 
<link rel="stylesheet"  href="styles/style.css">
@section ('header')

{{$header ?? ''}}
@stop

@section ('title' )

<CENTER>

<h1>{{$title ??''}} </h1>

@section ('content')
<h3>Bienvenido a mi página! </h3>

@stop

@section ('footer')
<center> <div > <h3> Jocelyn Aide Carrillo Andrew   5-E       CBTis 122 </h3></div> </center>
@stop