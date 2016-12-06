        <?php /**/ $allreadyPermission = array(); /**/ ?>
        <?php if(count($rolePermission['permissions'])): ?>
            <?php foreach($rolePermission['permissions'] as $val): ?>
                <?php /**/ $allreadyPermission[] = $val['name']; /**/ ?>
            <?php endforeach; ?>       
        <?php endif; ?>
                    <!-- Permission -->
                        <div class="form-group m-t-20">
                            <div class="col-md-12 col-sm-12">
                            <table width="100%" class="table table-bordered">
                                <thead>
                                    <tr class = "active">
                                        <th style='width:165px;'>Permissions</th>
                                        <th>Add</th>
                                        <th>Edit</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                
                                <!--  get permission Code start  --->
                                <?php /**/ $oldType = ""; $i = 0; /**/ ?>   <!-- define the variables  -->
                                 <?php foreach($permissions as $key=>$permission): ?>
                                    <?php 
                                        $check = '';
                                        if(in_array($permission['name'] , $allreadyPermission)){
                                            $check = 'checked';
                                        } 
                                    ?>
                                    <?php if($oldType !=  $permission['label']): ?>
                                        <?php /**/ $oldType =  $permission['label']; /**/ ?>
                                        <tr>
                                            <th class = "active"><?php echo e($permission['label']); ?></th>
                                    <?php endif; ?>
                                            <th><input type="checkbox" value="<?php echo e($permission['id']); ?>" name="perms[<?php echo e($permission['name']); ?>]" <?php echo e($check); ?> /></th>
                                    <?php /**/ $i++; /**/ ?>
                                    <?php if($i == 4): ?>
                                        </tr>
                                        <?php /**/ $i = 0; /**/ ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>  
                                <!--  get permission Code start  ---> 
                                
                            </table>
                             
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-success">Assign Permissions</button>
                                </div>
                            </div>
                        </div>
                <!-- Permission -->
