<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller
{
    public function loginView(){
        if (Auth::check())
            Redirect(route('HomePage'));

        return view('auth/login');
    }

    public function loginVerify(LoginRequest $request){
    	$data = array(
    		'username' => $request->username,
    		'password' => $request->password
    	);

    	if (Auth::attempt($data)) {
    		return Redirect(route('HomePage'));
    	}
    	else
    	{
    		echo 'That bai';
    	}
    }

    public function registerView(){
        if (Auth::check())
            Redirect(route('HomePage'));
            
        return view('auth/register');
    }

    public function registerVerify(RegisterRequest $request) {
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'phonenumber' => $request->phonenumber
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            return Redirect(route('HomePage'));
        }
        else
            echo '!!!! THUA !!!!';
    }

    public function avatar() {
        if (Auth::check())
            return view('auth/uploadavatar');
        else
            return Redirect(route('LoginPage'));
    }

    public function upAvatar(Request $request) {
        if ($request->hasFile('upfile')) {
            $file = $request->file('upfile');
            $path = $file->move('storage\users', Auth::user()->username.'.'.$file->getClientOriginalExtension());

            $profile = User::find(Auth::user()->id);
            $profile->avatar = $path;
            $profile->save();
        }

        return Redirect(route('HomePage'));
    }

    public function logout() {
        Auth::logout();
        return Redirect(route('AboutPage'));
    }
}
