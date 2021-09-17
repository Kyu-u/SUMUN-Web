<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\Queueverif;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if(!$admin){
            return redirect()->route('landing');
        }
        if($admin->is_admin==1){
            return view('admin2');
        }
        else return redirect()->route('landing');
    }

    public function Verifindex()
    {
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if($admin->is_admin==1){
            $data = verifikasi::where('verified','=','0')->get();
            $user = Queueverif::join('users','tambahan','=','users.id')->get();
            return view('adminVerif',['images' => $data,'users' => $user]);
        }
        else return redirect()->route('landing');
    }

    public function delete(Request $request){
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if($admin->is_admin==1){
            $request->validate([
                'id' => 'required'
            ]);
            $verif = verifikasi::where('id','=',$request->id)->delete();    
            $data = verifikasi::where('verified','=','0')->get();
            $user = Queueverif::join('users','tambahan','=','users.id')->get();
            return view('adminVerif',['images' => $data,'users' => $user]);
        }
    }


    public function verify(Request $request){
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if($admin->is_admin==1){
            $request->validate([
                'user_id' => 'required'
            ]);
            $verif = verifikasi::where('user_id',$request->user_id);
            $verif->update(['verified' => '1']);
            $verif = $verif->first();
            $users = Queueverif::where('user_id','=',$request->user_id)->get();
            foreach ($users as $tochange){
                $change = User::where('id','=',$tochange->tambahan);
                $change->update([
                    'verified' => '3',
                    'mun_id' => $tochange->mun_id,
                    'transaction_id'=> $verif->id,
                ]);       
                
            }
            $users = Queueverif::where('user_id',$request->user_id)->delete();
            $data = verifikasi::where('verified','=','0')->get();
            $user = Queueverif::join('users','tambahan','=','users.id')->get();
            return view('adminVerif',['images' => $data,'users' => $user]);
        }
        else return redirect()->route('landing');
    }


    public function adminAssign(Request $request) {
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if($admin->is_admin==1){
            if($request->term){
                $users = User::where(function ($query) use ($request) {
                    $query->where('mun_id','=',$request->term);
                })->where('country','=',null)->orderBy('id','asc')->get();
            }
            else {
                $users = User::where('mun_id','=','UNDP')->where('country','=',null)->get();
            }
            return view('adminAssign',['users' => $users]);
        }
        else return redirect()->route('landing');
    }

    public function assignCountry(Request $request) {
        if(Auth::check()==false){
            return redirect()->route('showLoginForm');
        }

        $admin = Auth::user();
        if($admin->is_admin==1){
            $request->validate([
                'username' => 'required',
                'country' => 'required'
            ]);
            if(User::where('username','=',$request->username)->exists()){
                User::where('username','=',$request->username)->update([
                    'country' => $request->country,
                ]);
            }
            return redirect()->route('adminAssign');
        }
        else return redirect()->route('landing');
    }
}
