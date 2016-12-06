@section('pageTitle')
Group List
@endsection
@extends('admin.layouts.main')
@section('content')
<div id="content" class="content">
@include("admin.component.flash")
		
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Group List</h4>
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
                        {{--*/ $i = 1 /*--}}
                        @foreach($groups as $key=>$val)
                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->label}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>
                                    <a href="{{route('group.show', $val->id)}}" class="btn btn-primary btn-xs m-r-15 ">Edit</a>
                                    <span class="btn btn-danger btn-xs  m-r-5 ">
                                        {!! Form::open(['method' => 'DELETE','route' => ['group.destroy', $val->id] ,]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger  btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </span>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>  
		</div>
	</div>
</div>

@endsection
