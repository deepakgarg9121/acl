@if(isset($groupData['roles']) && count($groupData['roles']))
    @foreach($groupData['roles'] as $val)
    <div class='m-t-20'>
        <b>{{$val['name']}}</b>
    </div>
    @endforeach
@else
     <div class='m-t-20'>
        <b>No Role Assign Yet</b>
    </div>
@endif
