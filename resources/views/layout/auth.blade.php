@auth
    Login
@else
    <x-form method="POST" :action="route('login')">

        <x-form-input type="email" name="email" :value="old('email')" required autofocus label="E-Mail"/>

        <x-form-input class="block mt-1"
                      type="password"
                      name="password"
                      label="Passwort"
                      required autocomplete="current-password"/>

        <x-form-checkbox id="remember_me"
                         type="checkbox"
                         class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="remember"
                         label="Angemeldet bleiben"/>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900"
               href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-form-submit>
            {{ __('Log in') }}
        </x-form-submit>
    </x-form>

@endauth
