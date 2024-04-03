<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $web_config = WebConfig::first();

        return view('privacy_policy', [
            'theme' => $web_config->theme
        ]);
    }
}
