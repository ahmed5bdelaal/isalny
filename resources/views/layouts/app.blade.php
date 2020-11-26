<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="csrf-token" content="{{ csrf_token() }}">       
  <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://www.chakirdev.com/demo/Sara7a/css/bootstrapeng.css" rel="stylesheet" type="text/css">
  <link href="https://www.chakirdev.com/demo/Sara7a/css/styleseng.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<meta name="description" content="">
      <meta name="keywords" content="">
</head>
<body> 
    <div id="app">
<div style="background:#19B5FE;padding:10px;height: 100px;">   
<nav class="navbar navbar-default" id="HomePage" style="border-radius:0px;background:#19B5FE;border-color:#19B5FE;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background:#1E8BC3;">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" style="height: 0px;" id="bs-example-navbar-collapse-1">
         
    <ul class="nav navbar-nav navbar-right">
        @guest
          <li><a href="{{ route('login') }}" style="color:white;"><span class="glyphicon glyphicon-plus" style="font-size:12px;"></span>{{ __('Login') }}</a></li>
          @if (Route::has('register'))
          <li><a href="{{ route('register') }}" style="color:white;"><span class="glyphicon glyphicon-user" style="font-size:12px;"></span>{{ __('Register') }}</a></li>        
          @endif 
        @else
        <div>
          <ul class="nav navbar-nav">
        <li><a href="/" style="color:white;"><span class="glyphicon glyphicon-cog" style="font-size:12px;"></span>{{ Auth::user()->name }}</a></li>
          </ul>
          <ul class="nav navbar-nav">
          <li><a href="{{ route('logout') }}" style="color:white;" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-envelope" style="font-size:12px;"></span>{{ __('Logout') }}</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
          </form>
          </ul>
          <ul class="nav navbar-nav">
            <li><a href="{{url('/settings')}}" style="color:white;"><span class="glyphicon glyphicon-cog" style="font-size:12px;"></span> Settings </a></li>
          </ul> 
          <ul class="nav navbar-nav">
            <li><a href="{{url('/contact')}}" style="color:white;"><span class="glyphicon glyphicon-envelope" style="font-size:12px;"></span> Contact Us  </a></li>
          </ul> 
          @if (Auth::user()->role == 1)
          <ul class="nav navbar-nav">
            <li><a href="{{url('/admin')}}" style="color:white;"><span class="glyphicon glyphicon-envelope" style="font-size:12px;"></span> Admin </a></li>
          </ul>
          @endif
        </div>
        @endguest
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>
        <main class="py-4">
            @yield('content')
        </main>
<footer style="background-color: red ; display:fix; " >
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
        
    </div>
</body>
</html>
