<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::where('email','=',$request->email)->first();
        if($user->is_email_verified == 1){
            if(!Auth::attempt($request->only('email', 'password'), $request->remember)){
                return back()->with('status', 'Invalid login details');
            }

            if($user->munevent == NULL ){
                return redirect()->route('experiencelogin');
            }
        }
      
        return redirect()->route('landing')->withErrors('Invalid Credentials');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }

    public function addExp(Request $request){
        $request->validate([
            'munevent' => 'required',
        ]);

        $user = Auth::user();
        
        $user->update(['munevent' => $request->munevent]);

        return redirect()->route('landing');
    }
}
