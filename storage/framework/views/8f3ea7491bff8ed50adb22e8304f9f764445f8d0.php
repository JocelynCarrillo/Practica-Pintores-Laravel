
<link rel="stylesheet"  href="styles/style.css">
<?php $__env->startSection('header'); ?>
<?php echo e($header ?? ''); ?>

<?php $__env->stopSection(); ?>
<div > 
<?php $__env->startSection('title' ); ?>
<CENTER>
<h1><?php echo e($title ??''); ?> </h1> </div>
<?php $__env->startSection('content'); ?>
<center><form action="<?php echo e(action('Pagina@inicio')); ?>" method="get">
<?php echo e(csrf_field()); ?>

<label for ="user">Usuario</label>
<input type="text" name="user">
<br>
<label for ="password">Password</label>
<input type="password" name="password">
<br>
<input type="submit" value="Submit">
</form> </center>

</CENTER>
<?php $__env->stopSection(); ?>
<br>
<br>
<br>
<?php $__env->startSection('footer'); ?>
<center> <div > <h3> Jocelyn Aide Carrillo Andrew   5-E       CBTis 122 </h3></div> </center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pinmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eCarrilloAideAlien\resources\views/admons/login.blade.php ENDPATH**/ ?>