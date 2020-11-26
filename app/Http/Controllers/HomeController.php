<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\massage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $massages = User::find(Auth::user()->id)->massage()->orderBy('created_at', 'desc')->get();
        $unread = User::find(Auth::user()->id)->massage()->where('read_at' , Null)->get();
        return view('home',[
            'massages'=>$massages,
            'unread'=>$unread,
        ]);
    }
  
    public function settings(Request $data ,$user){
           Validator::make($data->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'username' => ['required', 'string', 'max:25', ],
            
        ],[
            'name.required'=>'اكتب اسمك ي خنزير',
            'email.required'=>'اكتب ايميلك ي خنزير',
        ]);
        if ($data->img===null) {
       
          User::where('id' , $user)->update([
            'name'=>$data->name,
            'email'=>$data->email,
            
            'username'=>$data->urls,
          ]);
          $data->session()->flash('status', 'البروفايل اتعدل ي عم');
           return redirect()->back();
       
        }else{
            
            $imageName = time().'.'.$data->img->extension();  
   
            $data->img->move(public_path('images'), $imageName);
            User::where('id' , $user)->update([
                'name'=>$data->name,
                'email'=>$data->email,
                'username'=>$data->urls,
                'img' =>$imageName,
              ]);
              $data->session()->flash('status', 'البروفايل اتعدل ي عم');
               return redirect()->back();
        }
    }

    public function destroy($id){
        
        massage::destroy($id);
        
        return redirect()->back();
    }
}