@extends('layouts.app')

@section('content')
<div class='clr'></div>
  <hr/>
  <div class='clr'></div>
    <br/>
    <br/>
    
  <div class='clr'></div>
  <hr/>
  <div class='clr'></div>
    <div class="container">
<link rel="stylesheet" href="https://www.chakirdev.com/demo/Sara7a/css/font-awesome.min.css">    
<title>My Profile </title>
<meta property="og:url"           content="http://127.0.0.1:8000/{{Auth::user()->name}}" />
<meta property="og:image"         content="https://www.chakirdev.com/demo/Sara7a/images/d.png" />  
<link rel="image_src" type="image/jpeg" href="https://www.chakirdev.com/demo/Sara7a/images/d.png" />    
<meta property="og:type"          content="website" />
<meta property="og:title"         content="اجعل رسالتك بناءة{{Auth::user()->name}}" />
<meta property="og:description"   content="" />
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:100%;
  margin: auto;
  text-align: center;
  font-family: arial;
}


.button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #f10;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.button:hover {
  opacity: 0.7;
}
.unread {
    background-color: blanchedalmond;
}
</style>      
<div style="background:#F7F7F9;">
<div id='HomePage'>
<div class="">
<center>
<div style="padding:10px;background:white;max-width:500px;">
    <span><i class="glyphicon glyphicon-paperclip"></i> Urls Profile : </span>
<a href="http://127.0.0.1:8000/guest/{{Auth::user()->username}}" target="_blank" style="font-size:15px;font-family:tahoma;">
    http://127.0.0.1:8000/guest/{{Auth::user()->username}}
    </a>
    <div class="clr"></div><br>         
    <a class="btn btn-primary share-popup" id='socialshare' href="http://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/guest/{{Auth::user()->username}} &t= اسألني {{Auth::user()->name}} -http://127.0.0.1:8000/" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=550,width=600');return false;" target="_blank">
    <i class="fa fa-facebook" aria-hidden="true"></i> Share in Facebook</a>

    <a class="btn btn-info" id='socialshare' href="http://www.twitter.com/intent/tweet?url=http://127.0.0.1:8000/guest/{{Auth::user()->username}} &text= اسألني {{Auth::user()->name}} - " target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Share in Twitter</a>        
</div></center>

<div class="clr"></div>
<div class="row profile">
    <div class="col-md-3">
        <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
            <img src="images/{{Auth::user()->img}}" class="img-responsive" style="width:100px;height:100px;">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                       {{Auth::user()->name}}
                </div>
            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li>
                        <a style="font-size:19px;">
                        <i class="glyphicon glyphicon-envelope" style="font-size:12px;"></i>
                        Messages :  <span style="font-family:tahoma;">{{count($massages)}}</span></a>
                    </li>
                    <li>
                        <a style="font-size:19px;">
                        <i class="glyphicon glyphicon-envelope" style="font-size:12px;"></i>
                       Unraed Messages :  <span style="font-family:tahoma;">{{count($unread)}}</span></a>
                    </li>
                    <li class="active"> 
                    <a href="{{url('/settings')}}" style="font-size:19px;">
                        <i class="glyphicon glyphicon-edit" style="font-size:12px;"></i>
                        Edit Profile  </a>
                    </li>                            
                </ul>
            </div>
            <!-- END MENU -->
        </div>

    </div>
    <div class="col-md-9">
        <div class="profile-content">
           <center><p style="font-size:25px;"> <i class="glyphicon glyphicon-envelope" style="font-size:17px;"></i> Message </p></center>
            <div class="clr"></div>    
            <hr/>    
            <div class="clr"></div>
            <div class="clr"></div>
            @foreach ($massages as $massage)
                <div class="container card  {{$massage->read_at == null ? 'unread' : ''}}" >
                        <h1 >{{$massage->data}}</h1> 
                        <?php $massage->Read($massage->id) ?>                         
                        <p>{{$massage->created_at}}</p>
                        <form action="{{ url('/massage/'.$massage->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <button type="submit" id="delete-task-{{ $massage->id }}" class="button">
                                delete
                            </button>
                        </form>  
                </div>
                @endforeach      
            </div>                    
        </div>
    </div>
</div>
<br/>
<br/>
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
