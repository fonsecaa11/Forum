<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        if (\Auth::check()){
            $topics = Topic::with('getName')->get();
            $user_avatar = Avatar::with('avatar')->get();
            $avatar = Avatar::find(auth()->user()->avatar_id)->path;
            return view('welcome',['topics'=>$topics,'user_avatar'=>$user_avatar,'avatar'=>$avatar]);
        } else {
            return view('formLogin');
        }
    }

    public function show()
    {
        $topics = Topic::where('user_id', auth()->user()->id)->orderby('created_at', 'desc')->get();
        $avatars = Avatar::find(auth()->user()->avatar_id)->path;
        return view('profile',[
            'topics' => $topics,
            'avatars' => $avatars,
        ]);
    }
}
