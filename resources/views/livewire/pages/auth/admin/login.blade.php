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

        $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: true);
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
