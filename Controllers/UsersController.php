<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function pengaduan_saya()
    {
        return view('Users.pengaduan_saya');
    }
    
    public function pengaduan_baru()
    {
        return view('Users.pengaduan_baru');
    }
    public function detail_pengaduan()
    {
        return view('Users.detail_pengaduan');
    }
    
    public function index()
    {
        return view('Users.index');
    }
}
