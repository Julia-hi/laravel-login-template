<x-guest-layout>
    <div class="h-100 pt-5 bg-light">
        <div class="d-flex flex-column justify-content-center">
            <div class="text-center">
                <a href="/">
                    <x-application-logo style="width:50px;" class="m-auto"></x-application-logo>
                </a>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <div class="rounded border-dark bg-white shadow w-50 p-3">
                    <div class="d-block">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <div class="form-group">
                            <form method="POST" action="{{ route('login', ['locale'=>'es']) }}">
                                @csrf
                                <!-- Email Address -->
                                <div class="form-group mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Contraseña')" />
                                    <x-text-input id="password" class="block mt-1 w-100 form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="d-block mt-4 ml-4">
                                    <input id="remember_me" type="checkbox" class="form-check-input border border-primary shadow focus:ring-indigo-500" name="remember">
                                    <label for="remember_me" class="form-check-label inline-flex items-center">
                                        <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                                    </label>
                                </div>
                                <div class="d-flex flex-row align-items-center justify-content-start mt-4">
                                    <x-primary-button class="my-2 btn btn-primary w-100">
                                        {{ __('Iniciar session') }}
                                    </x-primary-button>
                                </div>
                                <div class="d-flex flex-row justify-content-end my-2">
                                    @if (Route::has('password.request'))
                                    <div class="mx-3 p-2 rounded bg-secondary text-bold"><a role="button" class="text-white" style="text-decoration: none;" href="{{ route('password.request', ['locale'=>'es']) }}">
                                            {{ __('Olvidado contraseña?') }}
                                        </a></div>
                                    @endif
                                    <div class="mx-3 p-2 rounded bg-secondary text-bold">
                                        <a href="/es" role="button" class="text-white" style="text-decoration: none;">Volver al inicio</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
