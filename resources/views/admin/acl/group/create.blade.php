@section('pageTitle')
New Group 
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
                    <h4 class="panel-title">New Group</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered"  data-parsley-validate="true"  method='post' action="{{route('group.store')}}">
                        {!! Form::token() !!}
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Group* :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="name" value='{{old("name")}}' name="name" data-type="alphanum" placeholder="Create Group" data-parsley-required="true" >
                                <span class='help-block'>{{$errors->first('name')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Label* :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" value='{{old("label")}}' id="label" name="label" data-type="alphanum" placeholder="Enter Label" data-parsley-required="true" >
                                <span class='help-block'>{{$errors->first('label')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4"></label>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-success">Create Group</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
