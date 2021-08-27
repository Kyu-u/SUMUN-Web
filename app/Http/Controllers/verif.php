<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;

class verif extends Controller
{
    public function index()
    {
        return view('verif');
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
