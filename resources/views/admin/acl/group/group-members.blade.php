@section('pageTitle')
Roles to group
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
                    <h4 class="panel-title">Roles To Group</h4>
                </div>
                <div class="panel-body panel-form">
                    <form name="form" class="form-horizontal form-bordered"   method='post' action="{{route('group.groupmember')}}">
                        {!! Form::token() !!}
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Group* :</label>
                            <div class="col-md-6 col-sm-6">
                                <!--<input class="form-control" type="text" id="name" value='{{old("name")}}' name="name" data-type="alphanum" placeholder="Create Group" data-parsley-required="true" >-->
                                  <select id="groupSelect" name='roleGroup' data-parsley-required="true">
                                                <option value="">Select Group</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group['id']}}">{{$group['name']}}</option>
                                        @endforeach
                                </select>
                                <span class='help-block'>{{$errors->first('roleGroup')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4">Roles* :</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="members" multiple="multiple" name='roleForGroup[]' data-parsley-required="true">
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                                        @endforeach
                                </select>
                                <span class='help-block'>{{$errors->first('roleForGroup')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4"></label>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-success">Assign User To Group</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#members').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
            dropUp: false
        });
        
        $('#groupSelect').multiselect();
        
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : $('input[name="_token"]').val() }, 
        });
        $('#groupSelect').change(function(){
            if($(this).val() != ""){
                groupId = $(this).val();
                $.ajax({
                    url:"{{route('group.selectedroles')}}",
                    type:'post',
                    data:{groupId:groupId},
                    success:function(data){
                        var dataElem = "";
                        $.each( data, function( key, value ) {
                            dataElem = dataElem+value.id+',';
                        });
                        
                        dataElem = dataElem.substring(0,dataElem.lastIndexOf(","));   
                        var dataarray=dataElem.split(",");                              //Make an array
                 
                        $("#members").val(dataarray);                                 // Set the value
                        
                        $("#members").multiselect("refresh");                         // Then refresh
                    },
                    error:function(err){
                        
                    }
                });
            }else{
                $("#members").multiselect("clearSelection");
            }
        })
    });
</script>
@endsection
