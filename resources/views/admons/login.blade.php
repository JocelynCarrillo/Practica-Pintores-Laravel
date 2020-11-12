@extends('layouts.pinmaster')
<link rel="stylesheet"  href="styles/style.css">
@section ('header')
{{$header ?? ''}}
@stop
<div > 
@section ('title' )
<CENTER>
<h1>{{$title ??''}} </h1> </div>
@section ('content')
<center><form action="{{action('Pagina@inicio')}}" method="get">
{{csrf_field()}}
<label for ="user">Usuario</label>
<input type="text" name="user">
<br>
<label for ="password">Password</label>
<input type="password" name="password">
<br>
<input type="submit" value="Submit">
</form> </center>

</CENTER>
@stop
<br>
<br>
<br>
@section ('footer')
<center> <div > <h3> Jocelyn Aide Carrillo Andrew   5-E       CBTis 122 </h3></div> </center>
@stop
