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
            $change->update(['verified' => '2']);
        }
        $users = Queueverif::where('user_id',$request->user_id)->delete();
        $verif = verifikasi::where('user_id',$request->user_id);
        $verif->update(['verified' => '1']);
        $data = verifikasi::where('verified','=','0')->get();
        $user = Queueverif::join('users','tambahan','=','users.id')->get();
        return view('adminVerif',['images' => $data,'users' => $user]);
    }
}
