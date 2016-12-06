<?php $__env->startSection('pageTitle'); ?>
Roles
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="content" class="content">
<?php echo $__env->make("admin.component.flash", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Role List</h4>
			</div>
			<div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Label</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php /**/ $i = 1 /**/ ?>
                        <?php foreach($roles as $key=>$val): ?>
                            <tr class="odd gradeX">
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($val->name); ?></td>
                                <td><?php echo e($val->label); ?></td>
                                <td><?php echo e($val->created_at); ?></td>
                                <td>
                                    <a href="<?php echo e(route('role.show', $val->id)); ?>" class="btn btn-primary btn-xs m-r-15 ">Edit</a>
                                    <span class="btn btn-danger btn-xs  m-r-5 ">
                                        <?php echo Form::open(['method' => 'DELETE','route' => ['role.destroy', $val->id] ,]); ?>

                                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger  btn-xs']); ?>

                                        <?php echo Form::close(); ?>

                                    </span>
                                </td>
                            </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>