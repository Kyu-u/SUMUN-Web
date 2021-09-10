<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\Queueverif;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin2');
    }

    public function Verifindex()
    {
        $data = verifikasi::where('verified','=','0')->get();
        $user = Queueverif::join('users','tambahan','=','users.id')->get();
        return view('adminVerif',['images' => $data,'users' => $user]);
    }

    public function verify(Request $request){
        $request->validate([
            'user_id' => 'required'
        ]);
        $users = Queueverif::where('user_id','=',$request->user_id)->get();
        foreach ($users as $tochange){
            $change = User::where('id','=',$tochange->tambahan);
            $change->update([
                'verified' => '2',
                'mun_id' => $tochange->mun_id,
        ]);
            
        }
        $users = Queueverif::where('user_id',$request->user_id)->delete();
        $verif = verifikasi::where('user_id',$request->user_id);
        $verif->update(['verified' => '1']);
        $data = verifikasi::where('verified','=','0')->get();
        $user = Queueverif::join('users','tambahan','=','users.id')->get();
        return view('adminVerif',['images' => $data,'users' => $user]);
    }

    public function adminAssign(Request $request) {
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

    public function assignCountry(Request $request) {
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
}
