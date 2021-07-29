<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        if (Auth::attempt(request(['email', 'password'])) == false)
        {
            return back()->withErrors([
                'message' => 'The email or password is incorrect.'
            ]);
            return redirect()->to('/landing');
        }
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->to('/landing');
    }
}
