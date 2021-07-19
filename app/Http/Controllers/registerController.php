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
use Faker\Factory as Faker;

class registerController extends BaseController {

    public function index()
    {
        $users = User::all();

        return view('signup1');
    }

    public function index2(Request $request)
    {
        $users = $request->session()->get('users');

        return view('signup2', compact('users'));
    }

    public function index3(Request $request)
    {
        $users = $request->session()->get('users');

        return view('signup3', compact('users'));
    }

    public function index4(Request $request)
    {
        $users = $request->session()->get('users');
        
        return view('signup4', compact('users'));
    }

    public function index5()
    {
        return view('signup5');
    }

    public function store2(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        // ]);
        // $data = $request->all();
        // dump($data);
        // $check = $this->create($data);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if(empty($request->session()->get('users')))
        {
            $users = new User();
            $users->fill($validatedData);
            $request->session()->put('users', $users);
        }
        else
        {
            $users = $request->session()->get('users');
            $users->fill($validatedData);
            $request->session()->put('users', $users);
            // $request->session()->forget('users');
        }

        return redirect()->route('signup3');
    }

    // public function create(array $data)
    // {
    //     $faker = Faker::create('id_ID');
    //     return User::create([
    //         'name' => $data['name'],
    //         'username' => $faker->userName,
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password'])
    //     ]);
    // }
    public function store4(Request $request)
    {
        $validatedData = $request->validate([
            'school_name' => 'required',
            // 'grade' => 'required',
        ]);

        $users = $request->session()->get('users');
        $users->fill($validatedData);
        $request->session()->put('users', $users);
        $users->save();

        return redirect()->route('signup5');
    } 
}