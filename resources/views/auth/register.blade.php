<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <div class="w-full bg-bg-login bg-cover bg-no-repeat">
            <div class="w-full h-screen  flex justify-end items-center lg:max-w-[1200px] px-5 mx-auto">

                <div class="basis-1/2 flex flex-col justify-start h-[480px]">
                    <img src="./assets/logo.jpg" class="w-[122px] rounded-full mb-16" />
                    <h1 class="font-bold text-6xl text-white">It’s not just a <br /> Food, it’s an <br /> Experience
                    </h1>
                </div>
                <div class="basis-1/2 bg-white/50 rounded-3xl px-[90px] py-[20px]">
                    <h1 class="font-bold text-center text-white text-4xl mb-[97px]">Sign Up to your account</h1>
                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                            of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                            Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="ms-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{--
    </x-authentication-card> --}}
</x-guest-layout>