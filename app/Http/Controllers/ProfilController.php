<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('account.profil', compact('user'));
    }
}
