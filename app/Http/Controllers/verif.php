<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\Queueverif;
use App\Models\User;
use auth;

class verif extends Controller
{
    public function MUN()
    {
        $user = auth()->user();
        if ($user->verified == 2){
            return redirect('profile');
        }
        if (Queueverif::where('user_id','=',$user->id)->exists()){
            $users = Queueverif::where('user_id','=',$user->id)->get();
            $banyak = $users->count();
            // $price = $banyak * 800000 - (floor($banyak/6)*20000);
            $price = $banyak * 800000;

            if($banyak/6 == 0 ){
                $price = $price - (20000 * $banyak);
            }
            return view('verifMUN',['total'=> $price]);
        }
        if (Queueverif::where('tambahan','=',$user->id)->exists()){
            return redirect('currentlyRegistered');

        }
        else return redirect('verifNotRegist');
        
    }
    public function Webinar()
    {
        return view('verifb');
    }
    public function upload(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'payment' => 'required',
        ]);
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:jpeg,png|max:2048'
            ]);
            $request->file->store('verif', 'public');
            $verif = new Verifikasi([
                "name" => auth()->user()->name,
                "user_id" => auth()->user()->id,
                "type" => $request->get('payment'),
                "file_path" => $request->file->hashName()
            ]);
            $verif->save(); 
            $users = User::join('queueVerif','queueVerif.tambahan','=','users.id')->where('user_id','=',auth()->user()->id);
            $users->update([
                'verified' => '2'
            ]);
            
            return redirect()->back()->withErrors(['File successfuly uploaded!']);
        }
        else {
            return redirect()->back()->withErrors(['No file given']);
        }


    }
}
