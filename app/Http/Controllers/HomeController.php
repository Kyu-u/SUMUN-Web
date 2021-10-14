<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Queueverif;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile',['user' => $user]);
    }
    public function landing()
    {
        if(Auth::check()){
            $user = Auth::user();
        if($user->verified==1){
            $id = Queueverif::where('tambahan','=',$user->id)->first();
            if ($id){
                $temen = User::where('id','=',$id->user_id)->first();
                return view('landing',['nama' => $temen->name]);
                }
            }
            else
                return view('landing');
        }
        return view('landing');
    }
    public function about()
    {
        return view('about');
    }
    public function council()
    {
        return view('council');
    }
    public function merch()
    {
        return view('merch');
    }
    public function experience()
    {
        return view('experience');
    }
    public function experiencelogin()
    {
        return view('experiencelogin');
    }
    public function regisweb()
    {
        return view('regisweb');
    }
    public function verifNotRegist()
    {
        return view('verifNotRegist');
    }
    public function currentlyRegistered()
    {
        return view('currentlyRegistered');
    }
    public function waitemail()
    {
        return view('waitemail');
    }
}
