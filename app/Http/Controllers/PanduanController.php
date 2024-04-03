<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        $web_config = WebConfig::first();

        return view('panduan', [
            'theme' => $web_config->theme
        ]);
    }
}
