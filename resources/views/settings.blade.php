@extends('layouts/app')
@section('content')
<div class='clr'></div>
<hr/>
<div class='clr'></div>
@if (session()->has('status'))
<script>
Swal.fire(
  '{{session()->get('status')}}',
  'You clicked the button!',
  'success'
)
</script>
@endif
<div class='clr'></div>
<hr/>
<div class='clr'></div>
  <div class="container">

  <title>Edit Profile</title>    

  <div id='HomePage'>

<div class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-login">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-12">
                              <a href="#" id="register-form-link" style="font-size:20px;">Edit Profile</a>
                          </div>
                      </div>
                      <hr>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12">
                          <form  action="{{url('/setting/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                  <input type="text" name="name" id="email" tabindex="1"  class="form-control" placeholder="Fullname" value="{{Auth::user()->name}}">
                                  </div>
                                  @error('name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                                  <div class="form-group">
                                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
                                  </div>
                                  @error('email')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                              
                                    <div class="form-group">
                                      <div class="input-group">
                                      <div class="input-group-addon">Upload your img</div>      
                                      <input id="img" class="form-control" type="file" name="img" accept="image/*"> 
                                      <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{url('/images/'.Auth::user()->img)}}"> 
                                      </div>
                                    </div>    
                                    @error('img')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                          
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-addon" style="font-family:tahoma;">http://127.0.0.1:8000/</div>
                                      <input type="text" class="form-control" name="urls" value="{{Auth::user()->username}}" placeholder="Urls Profile " style="text-align:left;">
                                          
                                      </div>
                                    </div>
                                    @error('urls')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror                                   
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-sm-6 col-sm-offset-3">
                                              <input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Edit Profile">
                                              <input type="reset" class="form-control btn btn-register">
                                            </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div> <!-- /container -->        
  </div>    
  
  <div class='clr'></div>
  <br/><br/><br/><br/>
  

  <br/>
  
  <center>
      <div class='clr'></div>
       <img src="images/bn.gif" />
      <div class='clr'></div>    
  </center>
<br/><br/>   
@endsection