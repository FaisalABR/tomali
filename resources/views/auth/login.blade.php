<x-guest-layout>
    {{-- <x-authentication-card> --}}
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}
        <div class="w-full bg-bg-login bg-cover bg-no-repeat">
            <div class="w-full h-screen  flex justify-end items-center lg:max-w-[1200px] px-5 mx-auto">
                <div class="basis-1/2 flex flex-col justify-start h-[480px]">
                    <img src="./assets/logo.jpg" class="w-[122px] rounded-full mb-16" />
                    <h1 class="font-bold text-6xl text-white">It’s not just a <br /> Food, it’s an <br /> Experience
                    </h1>
                </div>
                <div class="basis-1/2 bg-white/50 rounded-3xl px-[90px] py-[80px]">
                    <h1 class="font-bold text-center text-white text-4xl mb-[97px]">Login to your account</h1>
                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <x-button class="ms-4">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



        {{--
    </x-authentication-card> --}}
</x-guest-layout>