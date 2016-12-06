<?php if(Session::has('success')): ?>
	<p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
<?php elseif(Session::has('error')): ?>
	<p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
<?php endif; ?>
