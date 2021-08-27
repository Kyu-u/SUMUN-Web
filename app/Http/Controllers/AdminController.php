<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\Queueverif;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin2');
    }

    public function Verifindex()
    {
        $data = verifikasi::all();
        $user = Queueverif::join('users','tambahan','=','users.id')->get();
        return view('adminVerif',['images' => $data,'users' => $user]);
    }

}
