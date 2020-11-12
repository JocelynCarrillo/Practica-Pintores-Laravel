
<?php $__env->startSection('header'); ?>
<h1>Laravel</h1>
<?php echo e($header ?? ''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
<h2>Práctica rutas</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title' ); ?>
<font color="purple"> 
<font face="Helvetica">
<h1><?php echo e($title ??''); ?> </h1>

<?php $__env->startSection('content'); ?>
<h2> Tu sueldo base es: <?php echo e($sueldo); ?> <br>
Total de horas trabajadas:<?php echo e($horas); ?>, de las cuales <?php echo e($hextra); ?> son horas extra; <br>
Tu pago por hora es de:<?php echo e($pagohora); ?> <br>
Tu pago con horas extra es de:<?php echo e($sueldoe); ?>

</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<center> <div style="background-color:pink"> <h3> JOCELYN AIDE CARRILLO ANDREW   5-E       CBTis 122 </h3></div> </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eCarrilloAideAlien\resources\views/DSueldo.blade.php ENDPATH**/ ?>