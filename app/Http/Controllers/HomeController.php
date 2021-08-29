<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
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
}
