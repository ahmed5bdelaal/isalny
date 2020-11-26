<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="csrf-token" content="{{ csrf_token() }}">       
  <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
  <link href="https://www.chakirdev.com/demo/Sara7a/css/bootstrapeng.css" rel="stylesheet" type="text/css">
  <link href="https://www.chakirdev.com/demo/Sara7a/css/styleseng.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <meta name="description" content="">
      <meta name="keywords" content="">
</head>
<body> 
<title>{{ config('app.name', 'Laravel') }}</title>    
<div style="background:#19B5FE;padding:10px;height:100px;">   
<nav class="navbar navbar-default" id="HomePage" style="border-radius:0px;background:#19B5FE;border-color:#19B5FE;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background:#1E8BC3;">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="https://is2lny.000webhostapp.com/">{{ config('app.name', 'Laravel') }}</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
      <li><a href="contact1.php" style="color:white;"><span class="glyphicon glyphicon-envelope" style="font-size:12px;"></span> Contact Us  </a></li>
    </ul>   
    <ul class="nav navbar-nav navbar-right">
        @guest
          <li><a href="{{ route('login') }}" style="color:white;"><span class="glyphicon glyphicon-plus" style="font-size:12px;"></span>{{ __('Login') }}</a></li>
          @if (Route::has('register'))
          <li><a href="{{ route('register') }}" style="color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;"></span>{{ __('Register') }}</a></li>        
          @endif 
        @else
        <div>
        <li><a href="" style="color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;"></span>{{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('logout') }}" style="color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;"></span>{{ __('Logout') }}</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
          </form>
        </div>
        @endguest
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>     
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
										<input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
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
<footer>
    <div id='HomePage'>
      <div class='rgt'>
        <ul>
         <li class='rgt mmoin'><a href='https://www.facebook.com/ahmed5bdelaal/'><img src='https://www.chakirdev.com/demo/Sara7a/images/facebook.png' class='social'/></a></li>  
         <li class='rgt mmoin'><a href='https://www.twitter.com/ahmed5bdelaal/'><img src='https://www.chakirdev.com/demo/Sara7a/images/twitter.png' class='social'/></a></li>  
         <li class='rgt mmoin'><a href=''><img src='https://www.chakirdev.com/demo/Sara7a/images/google.png' class='social'/></a></li>  
         <li class='rgt mmoin'><a href='https://www.youtube.com/ahmed5bdelaal/'><img src='https://www.chakirdev.com/demo/Sara7a/images/youtube.png' class='social'/></a></li>  
        </ul>  
      </div>
      <div class='lft'>
        <ul style='margin:5px;'>
         <li class='lft' style='padding:5px;font-family:tahoma;text-align:left;'>2020 &copy; All RIGHT RESERVED TO Is2lny</li>  
         <li class='clr lft' style='padding:5px;font-family:tahoma;text-align:left;'>POWRED BY <a href='http://www.facebook.com/ahmed5bdelaal' target='_blank' style="font-family:tahoma;">Ahmed abdelaal</a></li>  
        </ul> 
      </div>
    </div>
    </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.chakirdev.com/demo/Sara7a/js/bootstrap.min.js"></script>

        
</body>
</html>