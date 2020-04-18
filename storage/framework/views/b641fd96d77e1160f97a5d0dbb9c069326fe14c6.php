<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(env('APP_NAME')); ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name='csrf-token' content="<?php echo e(csrf_token()); ?>">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('/css/icons.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">
        
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="mdi mdi-home h1"></i></a>
        </div>

        <div id="app">
            <div class="account-pages">
                <auth-page></auth-page>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/modernizr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/detect.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/fastclick.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/jquery.slimscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/jquery.blockUI.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/waves.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/jquery.nicescroll.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/jquery.scrollTo.min.js')); ?>"></script>

        <!-- App js -->
        <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/app_template.js')); ?>"></script>

    </body>
</html><?php /**PATH /Users/hariharanpalanisamy/Documents/projects/laravel-vue-pos/resources/views/layouts/auth.blade.php ENDPATH**/ ?>