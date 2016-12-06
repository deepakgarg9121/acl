<?php $__env->startSection('pageTitle'); ?>
New Role 
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
                    <h4 class="panel-title">New Role</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered"  data-parsley-validate="true"  method='post' action="<?php echo e(route('role.store')); ?>">
                        <?php echo Form::token(); ?>

                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Role* :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="name" value='<?php echo e(old("name")); ?>' name="name" data-type="alphanum" placeholder="Create Role" data-parsley-required="true" >
                                <span class='help-block'><?php echo e($errors->first('name')); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Label* :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" value='<?php echo e(old("label")); ?>' id="label" name="label" data-type="alphanum" placeholder="Enter Label" data-parsley-required="true" >
                                <span class='help-block'><?php echo e($errors->first('label')); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4"></label>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-success">Create Role</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>