<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarsController extends Controller
{
    public function show(Request $request, Avatar $avatar)
    {
        return \Storage::download($avatar->path, $avatar->name);
    }

    public function getRandom()
    {
        $avatars = Avatar::inRandomOrder()->first();
        return response()->json([
            'avatar' => route('avatars.show',['avatar'=>$avatars->id]),
            'success' => true
        ]);
    }
}
