<?php 
    $CURRENTPAGE = \Request::route()->getName();
    $CURRENTPAGE = explode('.',$CURRENTPAGE); 
?>
<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="info">
							 <?php echo e(Auth::user()->name); ?>

							<small>Admin Panel</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
									
					<li class="has-sub <?php if($CURRENTPAGE[0] == 'role'){echo 'active';} ?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>Role Manager</span> 
						</a>
						<ul class="sub-menu">
							<li class='<?PHP if($CURRENTPAGE[1] == 'index'){echo 'active';} ?>'><a href="<?php echo e(route('role.index')); ?>">All Roles</a></li>
							<li class='<?PHP if($CURRENTPAGE[1] == 'create'){echo 'active';} ?>'><a href="<?php echo e(route('role.create')); ?>">New Role</a></li>
						</ul>
					</li>
                    <li class="has-sub <?php if($CURRENTPAGE[0] == 'group'){echo 'active';} ?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>Group Manager</span> 
						</a>
						<ul class="sub-menu">
							<li class='<?PHP if($CURRENTPAGE[1] == 'index'){echo 'active';} ?>'><a href="<?php echo e(route('group.index')); ?>">All Groups</a></li>
							<li class='<?PHP if($CURRENTPAGE[1] == 'create'){echo 'active';} ?>'><a href="<?php echo e(route('group.create')); ?>">New Group</a></li>
							<li class='<?PHP if($CURRENTPAGE[1] == 'groupmember'){echo 'active';} ?>'><a href="<?php echo e(route('group.groupmember')); ?>">Add Roles to group</a></li>
							<li class='<?PHP if($CURRENTPAGE[1] == 'grouproles'){echo 'active';} ?>'><a href="<?php echo e(route('group.grouproles')); ?>">Group Roles</a></li>
						</ul>
					</li>
                     <li class="has-sub <?php if($CURRENTPAGE[0] == 'permissions'){echo 'active';} ?>">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>Permission Manager</span> 
						</a>
						<ul class="sub-menu">
							<li class='<?PHP if($CURRENTPAGE[1] == 'assignToRole'){echo 'active';} ?>'><a href="<?php echo e(route('permissions.assignToRole')); ?>">Role Permissions</a></li>
							<li class='<?PHP if($CURRENTPAGE[1] == 'assignToGroup'){echo 'active';} ?>'><a href="<?php echo e(route('permissions.assignToGroup')); ?>">Group Permissions</a></li>
						</ul>
					</li>
                    
					
					
					
					
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
