<x-auth-layout>
    <x-slot name="logo">
        <a href="/"><img src="{{ asset('/img/site-logo.png') }}"
                         alt="{{ __('Vereinslogo des Airsoft Sport Club Linz') }}"
            ></a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <x-form method="POST" :action="route('register')">

        <!-- Name -->
        <x-form-group inline="true">
            <x-form-input label="{{ __('Vorname') }}"
                          name="forename"
                          floating="true" required autofocus/>
            <x-form-input label="{{ __('Familienname') }}"
                          name="surname"
                          floating="true" required autofocus/>
        </x-form-group>

        <x-form-group inline="true" class="mt-2">
            <!-- Email Address -->
            <x-form-input label="{{ __('Email') }}" type="email" name="email"
                          floating="true" required/>

            <!-- Email nickname -->
            <x-form-input label="{{ __('Spitzname') }}"
                          name="name"
                          floating="true" required autofocus/>
        </x-form-group>


        <x-form-group inline="true" class="mt-4">
            <!-- Password -->
            <x-form-input label="{{ __('Passwort') }}"
                          type="password"
                          name="password"
                          floating="true" required autocomplete="new-password"/>

            <!-- Confirm Password -->
            <x-form-input label="{{ __('Passwort wiederholen') }}"
                          type="password"
                          name="password_confirmation"
                          floating="true" required/>
        </x-form-group>

        <x-form-submit class="mt-2">
            {{ __('Registrieren') }}
        </x-form-submit>

        <a href="{{ route('login') }}">
            {{ __('Schon registriert?') }}
        </a>

    </x-form>
</x-auth-layout>
