@extends('content')
<div class='clr'></div>
  <hr/>
  <div class='clr'></div>
    <br/>
    <br/>
    
  <div class='clr'></div>
  <hr/>
  <div class='clr'></div>
    <div class="container">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Contact us</title>    

    <div id='HomePage'>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron clearfix">
        <h2 style="color:#D91E18;"><span class="glyphicon glyphicon-comment" style="font-size:15px;"></span>
          We welcome to any suggestion by sending the form below 
          </h2>
            <br/>
                      
        
          
        <form action="" method="post">   
        <div class="rgt formcnt1">
          <div class="form-group">
            <input type="text" name='Name' class="form-control" placeholder="Fullname " value="" style="border-radius:0px;height:53px;">
          </div>
          <div class="form-group">
            <input type="text" name='Email' class="form-control" placeholder="Email" value="" style="border-radius:0px;height:53px;">
          </div>                        
          <div class="form-group">
            <input type="text" name='Subject' class="form-control" placeholder="Subject " value="" style="border-radius:0px;height:53px;">
          </div>
             
        </div>
        <div class="rgt formcnt2">
          <div class="form-group">
            <textarea name='Message' class="form-control" rows='9' placeholder=" Message  " style="border-radius:0px;"></textarea>
          </div> 
          <div class="clr"></div> 
           <div class="g-recaptcha" data-sitekey="6Lc0nzIUAAAAAChrB3g4FzS1p6tBNMmH2YSVOuZZ"></div>
          <div class="clr"></div>    
          <input type="submit" name='Add' class="lft btn btn-primary" value='Send Message' style="border-radius:0px;"/>            
        </div>
        </form> 
          
        <br/>

      </div>

    </div> <!-- /container -->        
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