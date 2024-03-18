<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;

class HomeController extends Controller
{
    public function index()
    {
        $web_config = WebConfig::first();

        return view('home', [
            'theme' => $web_config->theme
        ]);
    }
}
