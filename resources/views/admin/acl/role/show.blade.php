@section('pageTitle')
New Role 
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
                    <h4 class="panel-title">Edit Role</h4>
                </div>
                <div class="panel-body panel-form">
                    {!! Form::model($role, ['method' => 'PATCH', 'route' => ['role.update', $role->id],'data-parsley-validate'=>'true','class'=>'form-horizontal form-bordered']) !!}

                     <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Role* :</label>
                        <div class="col-md-6 col-sm-6">
                            {!! Form::text('name', $role->name, ['class' => 'form-control','data-type'=>'alphanum','data-parsley-required'=>'true']) !!}
                            <span class='help-block'>{{$errors->first('name')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Label* :</label>
                        <div class="col-md-6 col-sm-6">
                            {!! Form::text('label', $role->label, ['class' => 'form-control' ,'data-type'=>'alphanum','data-parsley-required'=>'true']) !!}
                            <span class='help-block'>{{$errors->first('label')}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4"></label>
                        <div class="col-md-6 col-sm-6">
                            {!! Form::submit('Update Role', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
