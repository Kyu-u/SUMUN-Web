<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
