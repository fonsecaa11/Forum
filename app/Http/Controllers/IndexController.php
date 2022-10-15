<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class IndexController extends Controller
{
    public function index()
    {
        $avatars = Avatar::inRandomOrder()->limit(1)->get();
        return view('welcome',[
            'avatars' => $avatars,
        ]);
    }
}
