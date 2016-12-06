@section('pageTitle')
Group Roles
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
                    <h4 class="panel-title">Group Roles</h4>
                </div>
                <div class="panel-body m-t-10 ">
                        
                        <div class="form-group col-md-12 col-sm-12">
                            <a href="{{route('group.groupmember')}}"><button type="submit" class="btn btn-success pull-right">Change Here </button></a>
                        </div>    
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 m-l-30 ">Select Group :</label>
                            <div class="col-md-9 col-sm-6 m-l-20">
                                <!--<input class="form-control" type="text" id="name" value='{{old("name")}}' name="name" data-type="alphanum" placeholder="Create Group" data-parsley-required="true" >-->
                                  
                                  <select id="groupSelect" name='roleGroup'>
                                                <option value="">Select Group</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group['id']}}">{{$group['name']}}</option>
                                        @endforeach
                                </select>
                                <span class='help-block'>{{$errors->first('roleGroup')}}</span>
                            </div>
                            <label class="control-label col-md-2 col-sm-2 m-l-30  ">Roles :</label>
                            <div class="col-md-9 col-sm-6 m-l-20" id='groupRoles'>
                               <b> Select Group</b>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#groupSelect').multiselect();
        
        /*$.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' }, 
        });*/
        
        $('#groupSelect').change(function(){
            if($(this).val() != ""){
                groupId = $(this).val();
                $.ajax({
                    url:"{{route('group.grouproles')}}",
                    type:'post',
                    data:{groupId:groupId},
                    headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' }, 
                    success:function(data){
                        $('#groupRoles').html(data);
                    },
                    error:function(err){
                        
                    }
                });
            }else{
                $('#groupRoles').html('<b>Select Group</b>');
            }
        })
    });
    
</script>
@endsection
