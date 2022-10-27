<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        if (\Auth::check()){
            $avatar = Avatar::find(auth()->user()->avatar_id)->path;
            return view('welcome',[
                'avatars' => $avatar,
            ]);
        } else {
            return view('welcome');
        }

    }
}
