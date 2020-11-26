@extends('layouts/app')
@section('content')     
<div style="background:#2980B9;height:auto;margin-top:-20px;">   
    <div class="container">
      <div class="col-md-8" style="margin-top:80px;">
       <p style="color:white;font-size:40px;padding:10px;">Get anonymous and honest feedback about yourself.</p>  
       <center><p><img src='images/d.png' style="width:100px;"/></p></center>  
      </div>
      <div class="lft col-md-4 panel-mobile" style="margin-top:50px;">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">Log in </a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
                            <center>
							<div class="">
                                                                 
								<form id="login-form" class="form-mobile" action="{{ route('login') }}" method="post" role="form" style="display: block;">
                                @csrf
                                <div class="form-group">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>  
										<input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
										<input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" >
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                     <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                     </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="{{ __('Login') }}">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
                                                @if (Route::has('password.request'))
													<a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">{{ __('Forgot Your Password?') }}</a>
                                                @endif
                                                </div>
                       
											</div>
										</div>
									</div>
								</form>
                    	</div></center>
					</div>
				</div>
      </div>
    </div>    
    </div> 
    <div class='clr'></div>
<div class="clearfix" style="background:#19B5FE;height:auto;">
   <div id="HomePage">
        <div class="rgt col-md-4" style="margin-top:50px;margin-bottom:50px;">
          <p style="color:#262626;font-size:25px;"><span class="glyphicon glyphicon-folder-open" style="font-size:12px;"></span>
          Create your profile </p>
          <div style="font-size:17px;color:#f2f2f2;">- Friends and others will write their personal opinion and sincere about you on this link</div>
          </div>   
          <div class="rgt col-md-4" style="margin-top:50px;margin-bottom:50px;">
          <p style="color:#262626;font-size:25px;"><span class="glyphicon glyphicon-folder-open" style="font-size:12px;"></span>
           Share your profile</p>
          <div style="font-size:17px;color:#f2f2f2;">- You can Share your address on Facebook or Twitter or Skype or anywhere you want</div>
          </div> 
          <div class="rgt col-md-4" style="margin-top:50px;margin-bottom:50px;">
          <p style="color:#262626;font-size:25px;"><span class="glyphicon glyphicon-folder-open" style="font-size:12px;"></span>
           Read what was written people for you</p>
          <div style="font-size:17px;color:#f2f2f2;">- The observations that connects you to your own by yourself, and no one can see them except you</div>
          </div> 
    </div>
</div>
    <div class='clr'></div>

    <br/>
    
    <center>
        <div class='clr'></div>
         <img src="images/bn.gif" />
        <div class='clr'></div>    
    </center>
<br/><br/> 
@endsection  
