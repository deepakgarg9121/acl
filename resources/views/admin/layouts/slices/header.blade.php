<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2016 05:35:26 GMT -->
<head>
	<meta charset="utf-8" />
	<title>@yield('pageTitle')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	{{ Html::style("http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700") }}
	{{ Html::style("assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css") }}
	{{ Html::style("assets/plugins/bootstrap/css/bootstrap.min.css") }}
	{{ Html::style("assets/plugins/font-awesome/css/font-awesome.min.css") }}
	{{ Html::style("assets/css/animate.min.css") }}
	{{ Html::style("assets/css/style.min.css") }}
	{{ Html::style("assets/css/style-responsive.min.css") }}
	{{ Html::style("assets/css/theme/default.css") }}
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	{{ Html::style("assets/plugins/parsley/src/parsley.css") }}
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	{{ Html::style("assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css") }}
	{{ Html::style("assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css") }}
	{{ Html::style("assets/css/bootstrap-multiselect.css") }}
	{{ Html::style("assets/css/custom.css") }}
	
	<!-- ================== BEGIN BASE JS ================== -->
	{{ Html::script("assets/plugins/pace/pace.min.js") }}
	{{ Html::script("assets/plugins/jquery/jquery-1.9.1.min.js") }}
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
