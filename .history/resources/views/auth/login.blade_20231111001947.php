<x-app-layout>
    <x-auth-header />
    <!-- ==== registration section start ==== -->
    <section class="registration clear__top">
        <div class="container">
            <div class="registration__area">
                <h4 class="neutral-top">Log in</h4>
                <p>Don't have an account? <a href="/register">Register here.</a></p>
                {{-- <form action="#" method="post" name="login__form" class="form__login">
                        <div class="input input--secondary">
                            <label for="loginMail">Email*</label>
                            <input type="email" name="login__email" id="loginMail" placeholder="Enter your email"
                                required="required" />
                        </div>
                        <div class="input input--secondary">
                            <label for="loginPass">Password*</label>
                            <input type="password" name="login__pass" id="loginPass" placeholder="Password"
                                required="required" />
                        </div>
                        <div class="checkbox login__checkbox">
                            <label>
                                <input type="checkbox" id="remeberPass" name="remeber__pass" value="remember" />
                                <span class="checkmark"></span>
                                Remember Me
                            </label>
                            <a href="javascript:void(0)">Forget Password</a>
                        </div>
                        <div class="input__button">
                            <button type="submit" class="button button--effect">Login</button>
                        </div>
                    </form> --}}

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('login') }}"
                >
                    @csrf

                    <div>
                        <x-label
                            for="email"
                            value="{{ __('Email') }}"
                        />
                        <x-input
                            id="email"
                            class="block mt-1 w-full"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />
                    </div>

                    <div class="mt-4">
                        <x-label
                            for="password"
                            value="{{ __('Password') }}"
                        />
                        <x-input
                            id="password"
                            class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />
                    </div>

                    <div class="block mt-4">
                        <label
                            for="remember_me"
                            class="flex items-center"
                        >
                            <x-checkbox
                                id="remember_me"
                                name="remember"
                            />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}"
                        >
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
    </section>
    <!-- ==== #registration section end ==== -->
    <x-auth-footer />
</x-app-layout>
