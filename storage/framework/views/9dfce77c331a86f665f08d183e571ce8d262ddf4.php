<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_404_error.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2016 05:50:30 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | 404 Error Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<?php echo e(Html::style("http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700")); ?>

	<?php echo e(Html::style("assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css")); ?>

	<?php echo e(Html::style("assets/plugins/bootstrap/css/bootstrap.min.css")); ?>

	<?php echo e(Html::style("assets/plugins/font-awesome/css/font-awesome.min.css")); ?>

	<?php echo e(Html::style("assets/css/animate.min.css")); ?>

	<?php echo e(Html::style("assets/css/style.min.css")); ?>

	<?php echo e(Html::style("assets/css/style-responsive.min.css")); ?>

	<?php echo e(Html::style("assets/css/theme/default.css")); ?>

	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php echo e(Html::script("assets/plugins/jquery/jquery-1.9.1.min.js")); ?>

	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin error -->
        <div class="error">
            <div class="error-code m-b-10">500 <i class="fa fa-warning"></i></div>
            <div class="error-content">
                <div class="error-message">Insufficient Permission</div>
                <div class="error-desc m-b-20">
                    You are not authorized to access this resource.
                </div>
                <div>
                    <a href="#" onclick='window.history.back();' class="btn btn-success">Go Back</a>
                </div>
            </div>
        </div>
        <!-- end error -->
  
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	<?php echo e(Html::script("assets/plugins/jquery/jquery-migrate-1.1.0.min.js")); ?>

	<?php echo e(Html::script("assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js")); ?>

	<?php echo e(Html::script("assets/plugins/bootstrap/js/bootstrap.min.js")); ?>


	
    <?php echo e(Html::script("assets/js/apps.min.js")); ?>

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_404_error.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2016 05:50:30 GMT -->
</html>

