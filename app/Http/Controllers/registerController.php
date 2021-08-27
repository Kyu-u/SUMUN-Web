<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Queueverif;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Re;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory as Faker;
use Socialite;

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

    public function index5(Request $request)
    {
        $users = $request->session()->get('users');
        
        return view('signup5', compact('users'));
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

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        
        $users = new User();
        
        $users->fill(array('name' => $request->name,
         'username' => $request->username,
         'email'=>$request->email,
         'password'=>Hash::make($request->password)));
        $request->session()->put('users', $users);

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
            'grade' => 'required',
            'major' => 'required',
        ]);

        $users = $request->session()->get('users');
        $users->fill($validatedData);
        $request->session()->put('users', $users);
        $users->save();
        $request->session()->forget('users');

        return redirect()->route('landing');
    } 

    public function store5(Request $request)
    {
        $validatedData = $request->validate([
            'university' => 'required',
            'major' => 'required',
        ]);

        $users = $request->session()->get('users');
        $users->fill($validatedData);
        $request->session()->put('users', $users);
        $users->save();
        $request->session()->forget('users');

        return redirect()->route('landing');
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
    public function registMUN()
    {
        return view('registMUN');
    }
    public function registMember(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'council' => 'required',
        ]);
        $username = array_filter($request->username);
        $council = array_filter($request->council);
        if(count($username)==0||count($council)==0||count($username)!=count($council)){
            return redirect('registerMUN')->withErrors('Please fill out all the forms');
        }
        foreach($username as $i => $uname){
            $datas[$i]['username'] =  $username[$i];
            $datas[$i]['council'] =  $council[$i];
        }
        foreach($datas as $data){
            $user = User::where('username','=',$data['username'])->first();
            if(!$user){
                return redirect('registerMUN')->withErrors('User not found');
            }
            if($user->verified==1){
                return redirect('registerMUN')->withErrors('Ada user yang sedang diverifikasi');
            }
            if($user->verified==2){
                return redirect('registerMUN')->withErrors('Ada user sudah terverifikasi');
            }
        }
        foreach($datas as $data){
            $user = User::where('username','=',$data['username'])->first();
            $user->update(['verified' => '1']);
            Queueverif::create([
                'user_id' => auth()->user()->id,
                'tambahan' => $user->id,
            ]);
        }
        return redirect()->route('verifMUN.index')->with('success', 'Success');
    }
}