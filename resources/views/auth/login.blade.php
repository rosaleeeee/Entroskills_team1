<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="password_reseted" :status="session('status')" />
    @if(session('status'))
        <br><br>
    @endif

    <!-- Conteneur principal pour centrer tout le contenu -->
    <div class="flex items-center justify-center min-h-screen bg-gray-300">
        <!-- Conteneur pour le formulaire -->
        <div class="bg-white p-8 rounded-lg shadow-lg w-full sm:w-96">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <div class="error_mess">
                        @php
                            $err_password = $errors->get('password');
                            $err_email = $errors->get('email');
                        @endphp
                        @if ($err_password or $err_email)
                            {{ "Email or Password is incorrect" }}
                            <br><br>
                        @endif
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div>
                <br>
                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <br><br>
                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
