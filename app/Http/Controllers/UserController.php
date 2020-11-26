<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\massage;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index (User $id): UserResource
    {
        return new UserResource($id);

    }
    public function store(Request $request){

    //   $request->validate([
    //         'data'=>'requird',
    //         'user_id'=>'requird',
    //     ]);
        $user=massage::create([
            'data'=>$request->data,
            'user_id'=>$request->user_id,
        ]);
        return new UserResource($user);
    }
}
