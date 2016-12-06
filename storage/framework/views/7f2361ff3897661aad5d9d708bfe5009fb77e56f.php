<?php echo $__env->make('admin.layouts.slices.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.slices.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.slices.leftside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
<?php echo $__env->yieldContent('content'); ?>
		
<?php echo $__env->make('admin.layouts.slices.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>