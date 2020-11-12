 
<link rel="stylesheet"  href="styles/style.css">
<?php $__env->startSection('header'); ?>

<?php echo e($header ?? ''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title' ); ?>

<CENTER>

<h1><?php echo e($title ??''); ?> </h1>

<?php $__env->startSection('content'); ?>
<h3>Bienvenido a mi página! </h3>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<center> <div > <h3> Jocelyn Aide Carrillo Andrew   5-E       CBTis 122 </h3></div> </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eCarrilloAideAlien\resources\views/admons/lex.blade.php ENDPATH**/ ?>