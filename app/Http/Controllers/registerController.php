<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Users;

class registerController extends BaseController {

    public function index()
    {
        return view('signup1');
    }

    public function index2()
    {
        return view('signup2');
    }

    public function index3()
    {
        return view('signup3');
    }

    public function index4()
    {
        return view('signup4');
    }

    public function index5()
    {
        return view('signup5');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        redirect()->to('signup3');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    } 
}