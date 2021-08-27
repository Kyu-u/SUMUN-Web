<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\Queueverif;
use auth;

class verif extends Controller
{
    public function MUN()
    {
        $user = auth()->user();
        if ($user->verified == 2){
            echo('verified');
            return; 
        }
        if (Queueverif::where('user_id','=',$user->id)->exists()){
            $users = Queueverif::where('user_id','=',$user->id)->get();
            $price = $users->count() * 60000;
            return view('verif',['total'=> $price]);
        }
        if (Queueverif::where('tambahan','=',$user->id)->exists()){
            echo('wait');
            return; 
        }
        else return redirect('registerMUN');
        
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
                'image' => 'mimes:jpeg,bmp,png'
            ]);
            $request->file->store('verif', 'public');
            $verif = new Verifikasi([
                "name" => auth()->user()->name,
                "user_id" => auth()->user()->id,
                "type" => $request->get('payment'),
                "file_path" => $request->file->hashName()
            ]);
            $verif->save(); 
            return back();
        }
        else {
            return redirect()->back()->withErrors(['No file given']);
        }


    }
}
