<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                // Check if the user's email already exists
                $existing_user = User::where('email', $google_user->getEmail())->first();

                if ($existing_user) {
                    // User with this email already exists, log in the existing user
                    Auth::login($existing_user);
                    return redirect('/');
                }

                // Create a new user
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);
                $new_user->assignRole("user");

                Auth::login($new_user);
                return redirect('/dashboard');
            } else {
                // User with this Google ID already exists, log in the existing user
                Auth::login($user);
                return redirect('/dashboard');
            }
        } catch (\Throwable $th) {
            dd("Something Went Wrong" . $th->getMessage());
        }
    }
}
