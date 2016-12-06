        {{--*/ $allreadyPermission = array(); /*--}}
        @if(count($groupPermission['permissions']))
            @foreach($groupPermission['permissions'] as $val)
                {{--*/ $allreadyPermission[] = $val['name']; /*--}}
            @endforeach       
        @endif
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
                                {{--*/ $oldType = ""; $i = 0; /*--}}   <!-- define the variables  -->
                                 @foreach($permissions as $key=>$permission)
                                    <?php 
                                        $check = '';
                                        if(in_array($permission['name'] , $allreadyPermission)){
                                            $check = 'checked';
                                        } 
                                    ?>
                                    @if($oldType !=  $permission['label'])
                                        {{--*/ $oldType =  $permission['label']; /*--}}
                                        <tr>
                                            <th class = "active">{{$permission['label']}}</th>
                                    @endif
                                            <th><input type="checkbox" value="{{$permission['id']}}" name="perms[{{$permission['name']}}]" {{$check}} /></th>
                                    {{--*/ $i++; /*--}}
                                    @if($i == 4)
                                        </tr>
                                        {{--*/ $i = 0; /*--}}
                                    @endif
                                @endforeach  
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
