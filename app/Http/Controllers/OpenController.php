<?php
namespace App\Http\Controllers;
use App\massage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class OpenController extends Controller
{
    public function index($user){

        $profiles=User::where('username',$user)->get();
        
        return view('guest',['profiles'=>$profiles]);
    }

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'msg' => ['required', 'string', 'max:255'],
        ]);
    }

    public function massage(Request $data ,$user){
            $get=User::where('username', $user)->first();
            $iduser=$get->id;
           massage::create([

            'data'=>$data->msg,
            'user_id'=>$iduser,

        ]);
        $data->session()->flash('status', 'الرسالة اتبعتت ي عم');
            return redirect()->back();
    }
}