  <!DOCTYPE html>
	<html lang="en">

	<head>
    <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <!-- Title Page-->
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fontfaces CSS-->
        <link href="<?php echo e(asset('public/css/font-face.css')); ?>" rel="stylesheet" media="all">
        <!-- <link href="<?php echo e(asset('public/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all"> -->
        <!-- <link href="<?php echo e(asset('public/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all"> -->
        <!-- <link href="<?php echo e(asset('public/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Bootstrap CSS-->
        <link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="<?php echo e(asset('public/css/animsition.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/animate.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/slick.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/select2.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/theme.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet" media="all">
    </head>
    <body>
    <?php echo $__env->yieldContent('content'); ?>

   	<script src="<?php echo e(asset('public/js/jquery-3.2.1.min.js')); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo e(asset('public/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <!-- asset(' JS       -->
    <script src="<?php echo e(asset('public/js/slick.js')); ?>">
    </script>
    <script src="<?php echo e(asset('public/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/animsition.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap-progressbar.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('public/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.counterup.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('public/js/circle-progress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/select2.min.js')); ?>">
    </script>

    </body>
</html>