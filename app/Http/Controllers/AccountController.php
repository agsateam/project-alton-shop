<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $img = "https://down-id.img.susercontent.com/file/id-11134207-7r990-lq8sagk24tume5";
        $data = [
            [
                "name" => "ALTON Set Lilac",
                "photo" => $img,
                "total_product" => 1,
                "status" => "Diproses",
                "total" => 500000,
            ],
            [
                "name" => "ALTON Set Camelia Navy",
                "photo" => $img,
                "total_product" => 3,
                "status" => "Dikirim",
                "total" => 250000,
            ],
            [
                "name" => "ALTON Flannel Shirt Vol 3",
                "photo" => $img,
                "total_product" => 4,
                "status" => "Selesai",
                "total" => 500000,
            ],
            [
                "name" => "ALTON Malvin Flannel",
                "photo" => $img,
                "total_product" => 2,
                "status" => "Dibatalkan",
                "total" => 140000,
            ],
        ];

        return view('account.dashboard', ['data' => $data]);
    }
}
