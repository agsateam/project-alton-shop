<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));
        $user->assignRole("user");

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Your Name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Your Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-row mt-4 gap-2">
            <!-- Password -->
            <x-text-input wire:model="password" click="togglePass()" hidden="password-icon-hidden" shown="password-icon-shown" id="password" class="block mt-1 w-full mr-2"
                            type="password"
                            placeholder="Password"
                            required autocomplete="new-password" />
            <!-- Confirm Password -->
            <x-text-input wire:model="password_confirmation" click="toggleConfirmPass()" hidden="confirm-password-icon-hidden" shown="confirm-password-icon-shown" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            placeholder="Confirm Password"
                            required autocomplete="new-password" />
        </div>
        <!-- Error Password Message -->
        <div class="mt-4">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button type="submit" class="btn btn-block bg-primary hover:bg-secondary text-white border-0">
            {{ __('Register') }}
        </button>
    </form>

    <div class="text-center mt-5">
        Sudah punya akun?
        <a class="text-primary hover:text-black font-bold" href="{{ route('login') }}" wire:navigate>
            {{ __('Login') }}
        </a>
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
    function toggleConfirmPass() {
        let passwordInput = document.getElementById('password_confirmation');
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
