<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */

    public function mount(){
        if(Auth::check()){
            if(Auth::user()->hasRole('admin')){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('dashboard');
            }
        }
    }

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full"
                type="email"
                name="email"
                placeholder="Email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
            <x-text-input wire:model="form.password" click="togglePass()" hidden="password-icon-hidden" shown="password-icon-shown" id="password" class="block mt-1 w-full"
                type="password"
                placeholder="Password"
                required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Tetap Masuk') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Lupa Password') }}
                </a>
            @endif
        </div>

        <button type="submit" class="btn btn-block mt-5 bg-primary hover:bg-secondary text-white border-0">
            {{-- <span class="loading loading-spinner"></span> --}}
            Log In
        </button>
    </form>

    <div class="my-2 px-6 sm:px-0 max-w-sm text-center font-medium text-gray-500">Or</div>
    {{-- Google Login Button --}}
    <div class="px-6 sm:px-0 w-full">
        <a href="{{ route('google.redirect') }}" class="text-white w-full  bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-between mb-2"><svg class=" -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>Sign In with Google<div></div></a>
    </div>
    <div class="text-center">
        Belum punya akun? <a href="register" class="text-primary font-bold hover:text-black" wire:navigate>Daftar</a>
    </div>
</div>

<script>
    function togglePass() {
        let passwordInput = document.getElementById('password');
        let iconHidden = passwordInput.nextElementSibling.children[0];
        let iconShown = passwordInput.nextElementSibling.children[1];
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            iconHidden.classList.add('hidden');
            iconShown.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            iconHidden.classList.remove('hidden');
            iconShown.classList.add('hidden');
        }
    }
</script>
