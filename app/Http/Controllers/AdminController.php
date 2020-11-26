<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin',[
            'users'=>$users,
        ]);
    }

    public function madmin($user){
        if(Auth::user()->role==1){
            $u=User::where('id',$user)->update([
                'role'=>1,
            ]);
            return redirect()->back();    
    }else{
            
        return redirect()->back();
       }
}
}
