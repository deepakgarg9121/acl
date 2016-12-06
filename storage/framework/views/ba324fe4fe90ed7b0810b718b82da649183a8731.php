<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Welcome to P3  </a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs"> <?php echo e(Auth::user()->name); ?></span> 
					</a>
				</li>
				
				<li><a href="<?php echo e(url('/logout')); ?>">Log Out</a></li>
				</ul>
				
			</div>
		
		</div>