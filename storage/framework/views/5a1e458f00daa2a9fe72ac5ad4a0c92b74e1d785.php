	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	</div>
	<?php echo e(Html::script("assets/plugins/jquery/jquery-migrate-1.1.0.min.js")); ?>

	<?php echo e(Html::script("assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js")); ?>

	<?php echo e(Html::script("assets/plugins/bootstrap/js/bootstrap.min.js")); ?>


	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<?php echo e(Html::script("assets/plugins/slimscroll/jquery.slimscroll.min.js")); ?>

	<?php echo e(Html::script("assets/plugins/jquery-cookie/jquery.cookie.js")); ?>

	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <?php echo e(Html::script("assets/plugins/parsley/dist/parsley.js")); ?>

    <?php echo e(Html::script("assets/js/apps.min.js")); ?>

	<!-- ================== END PAGE LEVEL JS ================== -->
   
    <?php echo e(Html::script("assets/plugins/DataTables/media/js/jquery.dataTables.js")); ?>

    <?php echo e(Html::script("assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js")); ?>

    <?php echo e(Html::script("assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js")); ?>

    <?php echo e(Html::script("assets/js/table-manage-default.demo.min.js")); ?>

    <?php echo e(Html::script("assets/js/bootstrap-multiselect.js")); ?>

    
	<script>
		$(document).ready(function() {
			App.init();
            TableManageDefault.init();
	});
		
	</script>
</body>
</html>

