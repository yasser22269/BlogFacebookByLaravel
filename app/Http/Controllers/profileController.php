<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        $route_parameter = request()->route()->parameter('user_name');
        $userProfile = User::where('user_name',$route_parameter)
        ->first();
        if( $userProfile == null ){
            return abort('404');
        }
        $Userfriends = Friend::where([
            'friend_id'=>$userProfile->id,
            ])->orwhere([
                'user_id'=>$userProfile->id,
                ])->get();

        $friends =null;
        if( $route_parameter != auth()->user()->user_name){
            $friends = Friend::where([
                'user_id'=>auth()->user()->id,
                'friend_id'=>$userProfile->id,
                ])->orwhere([
                    'friend_id'=>auth()->user()->id,
                    'user_id'=>$userProfile->id,
                    
                    ])->first();
        }
        if($friends != null &&( $friends->friends_request == 'blocked')){
            return abort('404');
        }

      //  return $Userfriends;
       return view('front.profile',compact('route_parameter','friends','userProfile','Userfriends'));
    }
}
