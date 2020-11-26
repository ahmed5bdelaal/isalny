<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Support\Carbon;
class massage extends Model
{
    use Notifiable;
    protected $fillable = ['data','user_id','read_at'];

    public function user(){

        return $this->belongsTo('App\User');
    }
    public function Read ($id){

        massage::where('id',$id)->update([
            'read_at'=>Carbon::now(),
        ]);
    }
}
