@extends('layouts/app')
<title>
    Dashbord
</title>
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
// $(function(){

//   $.getJson("https://api.github.com/users/ahmed5bdelaal" , function(data){

//     var con = "";
//     for(var x in data){
//       con += data[x].login;
//     }
//     console.log(con);
//     $("#show").html(con);
//   });
// })

  </script>
  
<div class="panel-group container">
    <div style="margin-top: 3%;" class="panel panel-default">
    <div style="margin-left: 1%;font-weight: bold; border-bottom: double; ">Users : {{count($users)}}</div>
    <div id="show"></div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Admin</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            @if ($user->role===0)
            <td><a href="{{url('/madmin/'.$user->id)}}">admin</a></td>
            @else
            <td>admin</td>
            @endif
            <td>{{$user->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>  
</div>
@endsection