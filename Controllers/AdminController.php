<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pengaduan()
    {
        return view('Admin.pengaduan');
    }

    
    public function detail_pengaduan()
    {
        return view('Admin.detail_pengaduan');
    }

    public function login()
    {
        return view('Admin.login');
    }

    public function daftar_pengaduan()
    {
        return view('Admin.daftar_pengaduan');
    }
    public function index()
    {
        return view('admin.index');
    }
}
