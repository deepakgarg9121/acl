@section('pageTitle')
Permission To Role
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
                    <h4 class="panel-title">Permission To Role</h4>
                </div>
                <form class="form-horizontal form-bordered"  method='post' action="{{route('permissions.saveRolePerms')}}">
                    {!! Form::token() !!}
                    <div class="panel-body panel-form">
                        <div class="form-group m-t-20">
                            <label class="control-label col-md-4 col-sm-4 m-l-20">Roles* :</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="roles" name='role_id' data-parsley-required="true">
                                            <option value="">Select Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                                        @endforeach
                                </select>
                                <span class='help-block'>{{$errors->first('role_id')}}</span>
                            </div>
                        </div>
                    
                    <!-- Permission -->
                           <div id='roleTemplateData' class="col-md-12 col-sm-12">
                           </div>    
                    <!-- Permission -->
                    
                    </div>
                </form>    
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#roles').multiselect();
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' }, 
        });
        $('#roles').change(function(){
            if($(this).val() != ""){
                roleId = $(this).val();
                $.ajax({
                    url:"{{route('permissions.rolePerms')}}",
                    type:'post',
                    data:{roleId:roleId},
                    success:function(data){
                        $("#roleTemplateData").html(data);                 
                    },
                    error:function(err){
                        $("#roleTemplateData").html('Try Again'); 
                    }
                });
            }else{
                $("#roleTemplateData").html('Select Role'); 
            }
        })
    });
</script>
@endsection
