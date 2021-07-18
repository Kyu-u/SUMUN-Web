<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory as Faker;
use Socialite;

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
        $faker = Faker::create('id_ID');
        return User::create([
            'name' => $data['name'],
            'username' => $faker->userName,
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->stateless()->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/');
     
            }else{
                $finduserEmail = User::where('email', $user->email)->first();

                if($finduserEmail){
                    $finduserEmail->update([
                        'google_id'     => $user->id,
                    ]);
                    Auth::login($finduserEmail);
                }
                else{
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
        
                    Auth::login($newUser);
                }
     
                return redirect('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}