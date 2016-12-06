<?php echo $__env->make('auth.slices.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
		<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="assets/img/login-bg/bg-8.jpg" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-edit text-success"></i> Announcing the App</h4>
                    <p>
                        As a Apps administrator,  manage your organizations account, such as add new users, manage security settings, and turn on the services you want your team to access.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Sign Up
                    <small>Create your Account. It is free and always will be.</small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                 <form data-parsley-validate role="form" method="POST" action="<?php echo e(url('/register')); ?>" method="POST" class="margin-bottom-0">
				  <?php echo csrf_field(); ?>

                        
                         <label class="control-label">Your Name</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input  data-parsley-required="true" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Your name" />
                            </div>
                        </div>
					   
					   <label class="control-label">Email</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input name="email" value="<?php echo e(old('email')); ?>" type="text" data-parsley-type="email" data-parsley-required="true"  class="form-control" placeholder="Email address" />
								<?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <label class="control-label">Password</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                 <input type="password" name="password" data-parsley-required="true" class="form-control" placeholder="Password" />
									<?php if($errors->has('password')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('password')); ?></strong>
										</span>
									<?php endif; ?>
                            </div>
                        </div>
						
						<label class="control-label">Confirm Password</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                 <input type="password" name="password_confirmation" data-parsley-required="true" class="form-control" placeholder="Password" />
										<?php if($errors->has('password_confirmation')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('password_confirmation')); ?></strong>
											</span>
										<?php endif; ?>
                            </div>
                        </div>
                        
                        
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" /> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.
                            </label>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            Already a member? Click <a href="<?php echo url('login'); ?>">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center text-inverse">
                            &copy; P3 Multisolutions All Right Reserved 2016
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        
	</div>
	
<?php echo $__env->make('auth.slices.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	

