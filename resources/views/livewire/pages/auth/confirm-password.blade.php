<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component {
    public string $password = '';

    /**
     * Confirm the current user's password.
     */
    public function confirmPassword(): void
    {
        $this->validate([
            'password' => ['required', 'string'],
        ]);

        if (!Auth::guard('web')->validate([
            'email' => Auth::user()->email,
            'password' => $this->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-creme dark:bg-gray-900">
    <img class="h-28 w-40" src={{url('/images/logo.png')}} draggable="false">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <h1 class="text-4xl py-2 text-center text-gray-700 font-bold">Confirm password</h1>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form wire:submit="confirmPassword">
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input wire:model="password"
                              id="password"
                              class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button class="ms-4 bg-nikol-500 hover:bg-nikol-700">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
