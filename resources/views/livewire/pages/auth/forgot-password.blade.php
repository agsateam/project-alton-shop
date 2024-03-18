<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>
    <div class="font-medium">{{ __('Reset Your Password') }}</div>
    <div class="mb-4 text-sm text-gray-600">{{ __('We will send you an email to reset your password') }}</div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex mt-4">
            <button type="submit" class="btn grow border-0 text-white bg-[#9A3B3B] hover:bg-[#5f2323]">
                {{ __('Reset Password') }}
            </button>
            <a class="ml-2 btn grow border-0 text-white bg-gray-500" href="{{ url()->previous() }}" wire:navigate>
                {{ __('Cancel') }}
            </a>
        </div>
    </form>
</div>
