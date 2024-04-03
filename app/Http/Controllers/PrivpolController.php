<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;

class PrivpolController extends Controller
{
    public function index()
    {
        $web_config = WebConfig::first();

        return view('privpol', [
            'theme' => $web_config->theme
        ]);
    }
}
