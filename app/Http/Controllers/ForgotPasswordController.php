<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    // public function getEmail()
    // {
    //    return view('customauth.passwords.email');
    // }
    
    public function index(){
        return view('forgot');
    }
  
   public function postEmail(Request $request)
    {
      $request->validate([
          'email' => 'required|email|exists:users',
      ]);
      $token = str_random(64);
  
        DB::table('password_resets')->insert(
            ['email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()]
        );
       
        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
  
        return view('forgot2',['email' => $request->email]);
    }

    public function showResetPasswordForm($token) { 
        return view('resetPass', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);
 
         $updatePassword = DB::table('password_resets')
                             ->where([
                               'token' => $request->token
                             ])
                             ->first();
 
         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }
         $user = User::where('email', $updatePassword->email)->update(['password' => Hash::make($request->password)]);
         DB::table('password_resets')->where(['email'=> $request->email])->delete();
 
         return redirect('/login')->with('message', 'Your password has been changed!');
     }
}
