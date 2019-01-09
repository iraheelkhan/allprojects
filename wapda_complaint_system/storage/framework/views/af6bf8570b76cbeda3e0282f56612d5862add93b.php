<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/vendor.bundle.addons.css')); ?>">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('js/jquery.editable.min.js')); ?>"></script>
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php echo $__env->make('inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container-fluid page-body-wrapper">

      <?php echo $__env->make('inc.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- row should be started in the content blade -->

        <?php echo $__env->yieldContent('content'); ?> 

         </div>
         <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>

        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<script type="text/javascript">
  
</script>
  <script src="<?php echo e(asset('js/vendor.bundle.base.js')); ?>">
    
  </script>
  
  <script src="<?php echo e(asset('js/vendor.bundle.addons.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('js/misc.js')); ?>"></script>