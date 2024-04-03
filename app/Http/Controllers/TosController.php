<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;

class TosController extends Controller
{
    public function index()
    {
        $web_config = WebConfig::first();

        return view('tos', [
            'theme' => $web_config->theme
        ]);
    }
}
