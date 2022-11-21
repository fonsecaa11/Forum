<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        //$request->file('image')->store('/images');

        $file = $request->hasFile('image');
        $newfile =$request->file('image');
        $image = $newfile->store('images');

        $topics = new topic();
        $topics->text = $request['text'];
        $topics->path = $image;
        $topics->user_id = auth()->user()->id;
        $topics->save();

        return redirect()->route('welcome');
    }
}
