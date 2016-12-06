<?php $__env->startSection('pageTitle'); ?>
New Group 
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
                    <h4 class="panel-title">Edit Group</h4>
                </div>
                <div class="panel-body panel-form">
                    <?php echo Form::model($group, ['method' => 'PATCH', 'route' => ['group.update', $group->id],'data-parsley-validate'=>'true','class'=>'form-horizontal form-bordered']); ?>


                     <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Group* :</label>
                        <div class="col-md-6 col-sm-6">
                            <?php echo Form::text('name', $group->name, ['class' => 'form-control','data-type'=>'alphanum','data-parsley-required'=>'true']); ?>

                            <span class='help-block'><?php echo e($errors->first('name')); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Label* :</label>
                        <div class="col-md-6 col-sm-6">
                            <?php echo Form::text('label', $group->label, ['class' => 'form-control' ,'data-type'=>'alphanum','data-parsley-required'=>'true']); ?>

                            <span class='help-block'><?php echo e($errors->first('label')); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4"></label>
                        <div class="col-md-6 col-sm-6">
                            <?php echo Form::submit('Update Group', ['class' => 'btn btn-success']); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>