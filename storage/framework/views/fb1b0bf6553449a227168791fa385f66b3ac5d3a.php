<?php
echo "Everthing working fine";

?>
<h1>Class</h1>
<?php if (Gate::check('add_class')): ?>
    <a href="<?php echo e(route('class.create')); ?>">Add </a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('edit_class')): ?>
    <a href="<?php echo e(route('class.edit',1)); ?>">Edit</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('view_class')): ?>
    <a href="<?php echo e(route('class.index')); ?>">View</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('delete_class')): ?>
    <a href="<?php echo e(route('class.delete')); ?>">Delete</a>
<?php endif; ?>

<br>
<h1>Student</h1>
<?php if (Gate::check('add_student')): ?>
    <a href="">Add </a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('edit_student')): ?>
    <a href=''>Edit</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('view_student')): ?>
    <a href=''>View</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('delete_student')): ?>
    <a href=''>Delete</a>
<?php endif; ?>

<br><h1>Employee</h1>
<?php if (Gate::check('add_employee')): ?>
    <a href=''>Add </a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('edit_employee')): ?>
    <a href=''>Edit</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('view_employee')): ?>
    <a href=''>View</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('delete_employee')): ?>
    <a href=''>Delete</a>
<?php endif; ?>

<br><h1>Awards</h1>
<?php if (Gate::check('add_award')): ?>
    <a href=''>Add </a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('edit_award')): ?>
    <a href=''>Edit</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('view_award')): ?>
    <a href=''>View</a>
<?php endif; ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if (Gate::check('delete_award')): ?>
    <a href=''>Delete</a>
<?php endif; ?>

<br>
