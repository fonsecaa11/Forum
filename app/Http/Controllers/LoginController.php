<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Avatar;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('formLogin');
    }

    public function showCreate()
    {
        $avatars = Avatar::inRandomOrder()->limit(1)->get();
        return view('formCreate',[
            'avatars' => $avatars,
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        $fieldType  = filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
//        if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
//            return redirect()->back()->withInput()->withErrors(['email' => 'Email Inválido']);
//        }

        if (Auth::attempt(array($fieldType => $credentials['name'], 'password' => $credentials['password']))) {
            return redirect()->route('welcome');
        }
        return redirect()->back()->withInput()->withErrors(['Email/Username ou a senha está incorreto']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function create(UserRequest $request)
    {
        $data = $request->validated();

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->avatar_id = $data['avatar_id'];
        $user->save();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->route('welcome');
        }
        return redirect()->route('welcome');
    }
}
