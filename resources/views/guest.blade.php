@extends('layouts.app')

@section('content')
<div class='clr'></div>
  <hr/>
  <div class='clr'></div>
  @if (session()->has('status'))
  <script>
  Swal.fire(
    '{{session()->get('status')}}',
    
    'success'
  )
  </script>
  @endif
  <div class='clr'></div>
  <hr/>
  <div class='clr'></div>
    <div class="container">

    <title>isalny</title> 
    <meta property="og:url"           content="http://127.0.0.1:8000" />
    <link rel="image_src" type="image/jpeg" href="https://www.chakirdev.com/demo/Sara7a/images/mail.png" />    
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Donner un avis a  - http://127.0.0.1:8000" />
    <meta property="og:description"   content="" /> 
    <div style="background:#F7F7F9;">
    <div id='HomePage'>
    <div class="container">
        <div class="row profile">
            <div class="col-md-12">
                <div class="profile-content pf-msg">
                   <center>
                    @foreach ($profiles as $item)
                    <div class="profile-sidebar">
                        <div class="profile-userpic">
                          {{-- <img src="https://www.chakirdev.com/demo/Sara7a/img/man-1.png" class="img-responsive" style="width:100px;height:100px;">  --}}
                          <img src="{{asset('/images/'.$item->img)}}" class="img-responsive" style="width:100px;height:100px;">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                             
                              {{$item->name}}
                             
                           </div>
                        </div>
                    </div> 
                       <p style="font-size:17px;"> <i class="glyphicon glyphicon-envelope" style="font-size:12px;"></i> Make constructive message</p>            
                    </center>
                    
                    <div class="clr"></div>    
                    <hr/>    
                    <div class="clr"></div>
                    <form action="{{url('/guest/'.$item->username)}}" method="Post">
                      @csrf
                      <center>    
                      <div class="form-group">
                        <textarea class="form-control" name="msg" rows="6" placeholder="Send" style="width:100%;"></textarea>  
                      </div>
                      <input type="submit" class="btn btn-primary" name="Add" value="Send"/>
                      
                      </center>        
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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