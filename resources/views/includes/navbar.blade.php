<nav  >
<font face="Helvetica">
<center>

<div style="background-color:pink">
@section ('navbar')
<h1>Menú de navegación</h1> 


<h3> <img src="images/frida.jpg" alt="frida" height="90" width="110">
<a href ="{{action('Pagina@frida')}}">Frida Kahlo</a> <br>
       <img src="images/vincent.jpg" alt="vin" height="90" width="110"> 
       <a href ="{{action('Pagina@vincent')}}">Vincent Van Gogh</a> <br>
       <img src="images/tamara.jpg" alt="tam" height="90" width="110">
       <a href ="{{action('Pagina@tamara')}}">Tamara de Lempicka</a> <br>
       <img src="images/leonardo.jpg" alt="leo" height="90" width="110">
       <a href ="{{action('Pagina@leo')}}">Leonardo Da Vinci</a> <br>











        
    </h3>

@show
</div>


</center>
</font>
</nav>

