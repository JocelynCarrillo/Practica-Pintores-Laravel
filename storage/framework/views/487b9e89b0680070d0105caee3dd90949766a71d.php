<nav  >
<font face="Helvetica">
<center>

<div style="background-color:pink">
<?php $__env->startSection('navbar'); ?>
<h1>Menú de navegación</h1> 


<h3> <img src="images/frida.jpg" alt="frida" height="90" width="110">
<a href ="<?php echo e(action('Pagina@frida')); ?>">Frida Kahlo</a> <br>
       <img src="images/vincent.jpg" alt="vin" height="90" width="110"> 
       <a href ="<?php echo e(action('Pagina@vincent')); ?>">Vincent Van Gogh</a> <br>
       <img src="images/tamara.jpg" alt="tam" height="90" width="110">
       <a href ="<?php echo e(action('Pagina@tamara')); ?>">Tamara de Lempicka</a> <br>
       <img src="images/leonardo.jpg" alt="leo" height="90" width="110">
       <a href ="<?php echo e(action('Pagina@leo')); ?>">Leonardo Da Vinci</a> <br>











        
    </h3>

<?php echo $__env->yieldSection(); ?>
</div>


</center>
</font>
</nav>

<?php /**PATH C:\laragon\www\eCarrilloAideAlien\resources\views/includes/navbar.blade.php ENDPATH**/ ?>