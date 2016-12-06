<?php
echo "Everthing working fine";

?>
<h1>Class</h1>
@can('add_class')
    <a href="{{route('class.create')}}">Add </a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('edit_class')
    <a href="{{route('class.edit',1)}}">Edit</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('view_class')
    <a href="{{route('class.index')}}">View</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('delete_class')
    <a href="{{route('class.delete')}}">Delete</a>
@endcan

<br>
<h1>Student</h1>
@can('add_student')
    <a href="">Add </a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('edit_student')
    <a href=''>Edit</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('view_student')
    <a href=''>View</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('delete_student')
    <a href=''>Delete</a>
@endcan

<br><h1>Employee</h1>
@can('add_employee')
    <a href=''>Add </a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('edit_employee')
    <a href=''>Edit</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('view_employee')
    <a href=''>View</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('delete_employee')
    <a href=''>Delete</a>
@endcan

<br><h1>Awards</h1>
@can('add_award')
    <a href=''>Add </a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('edit_award')
    <a href=''>Edit</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('view_award')
    <a href=''>View</a>
@endcan

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@can('delete_award')
    <a href=''>Delete</a>
@endcan

<br>
