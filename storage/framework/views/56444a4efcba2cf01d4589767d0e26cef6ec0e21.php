<?php $__env->startSection('pageTitle'); ?>
Permission To Group
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
                    <h4 class="panel-title">Permission To Group</h4>
                </div>
                <form class="form-horizontal form-bordered"  method='post' action="<?php echo e(route('permissions.saveGroupPerms')); ?>">
                    <?php echo Form::token(); ?>

                    <div class="panel-body panel-form">
                        <div class="form-group m-t-20">
                            <label class="control-label col-md-4 col-sm-4 m-l-20">Group* :</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="group" name='group_id' data-parsley-required="true">
                                         <option value="">Select Group</option>
                                        <?php foreach($groups as $group): ?>
                                            <option value="<?php echo e($group['id']); ?>"><?php echo e($group['name']); ?></option>
                                        <?php endforeach; ?>
                                </select>
                                <span class='help-block'><?php echo e($errors->first('group_id')); ?></span>
                            </div>
                        </div>
                    
                    <!-- Permission -->
                           <div id='groupTemplateData' class="col-md-12 col-sm-12">
                           </div>    
                    <!-- Permission -->
                    
                    </div>
                </form>   
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#group').multiselect();
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '<?php echo e(csrf_token()); ?>' }, 
        });
        $('#group').change(function(){
            if($(this).val() != ""){
                groupId = $(this).val();
                $.ajax({
                    url:"<?php echo e(route('permissions.groupPerms')); ?>",
                    type:'post',
                    data:{groupId:groupId},
                    success:function(data){
                        $("#groupTemplateData").html(data);                 
                    },
                    error:function(err){
                        $("#groupTemplateData").html('Try Again'); 
                    }
                });
            }else{
                $("#groupTemplateData").html('Select Group'); 
            }
        })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>