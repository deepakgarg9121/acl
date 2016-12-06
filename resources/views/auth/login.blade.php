@include('auth.slices.header')
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="assets/img/login-bg/bg-7.jpg" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-diamond text-success"></i>Neo Ogilvy</h4>
                    <p>
                       The Luxuery It Services Provider
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> &nbsp;Neo Ogilvy
                        <small> The Luxuery It Services Provider</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
					 <form  data-parsley-validate class="margin-bottom-0" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group m-b-15">
                       
							<input type="email"  name="email" value="{{ old('email') }}" class="form-control input-lg" data-parsley-required="true" data-parsley-type="email"   placeholder="Email Address" />
							  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                              @endif
						
						</div>
						
                        <div class="form-group m-b-15">
                            <input type="password" name="password"  class="form-control input-lg"  data-parsley-required="true" placeholder="Password" />
							 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                              @endif
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input name="remember" type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                             <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div> 
						
						<div class="m-t-20 m-b-40 p-b-40">
                            Not a member yet? Click <a href="{!! url('register') !!}" class="text-success">here</a> to register.
                        </div>
                        <hr />
                       
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
   	</div>
	<!-- end page container -->
	
@include('auth.slices.footer')
	

