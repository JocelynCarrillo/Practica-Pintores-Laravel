
<?php $__env->startSection('header'); ?>
<h1>Laravel</h1>
<?php echo e($header ?? ''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title' ); ?>
<font color="purple"> 
<font face="Helvetica">
<h1><?php echo e($title ??''); ?> </h1>

<?php $__env->startSection('content'); ?>
<h2> Total de horas usadas: <?php echo e($horas); ?>, tienes que pagar: $ <?php echo e($tarifa); ?> </h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<center> <div style="background-color:pink"> <h3> JOCELYN AIDE CARRILLO ANDREW   5-E       CBTis 122 </h3></div> </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eCarrilloAideAlien\resources\views/Est.blade.php ENDPATH**/ ?>