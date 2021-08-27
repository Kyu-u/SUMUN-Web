<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin2');
    }

    public function Verifindex()
    {
        $data = verifikasi::all();
        return view('adminVerif',['images' => $data]);
    }

}
