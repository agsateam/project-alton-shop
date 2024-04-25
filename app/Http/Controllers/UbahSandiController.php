<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbahSandiController extends Controller
{
    public function index()
    {
        return view('account.ubah-sandi');
    }
}
