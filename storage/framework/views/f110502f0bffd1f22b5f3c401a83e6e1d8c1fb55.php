<?php if(isset($groupData['roles']) && count($groupData['roles'])): ?>
    <?php foreach($groupData['roles'] as $val): ?>
    <div class='m-t-20'>
        <b><?php echo e($val['name']); ?></b>
    </div>
    <?php endforeach; ?>
<?php else: ?>
     <div class='m-t-20'>
        <b>No Role Assign Yet</b>
    </div>
<?php endif; ?>
