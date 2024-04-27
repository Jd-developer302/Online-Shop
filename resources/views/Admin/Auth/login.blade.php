@extends('adminlayout.layout')

@section('content')
<div class="row align-items-center justify-content-center h-p100" style="margin-top:10%">
    <div class="col-12">
        <div class="row justify-content-center g-0">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary">Let's Get Started</h2>
                        <p class="mb-0">Sign in to continue to Online Shop</p>
                    </div>
                    <div class="p-40">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                <x-text-input id="email" class="w-100" type="email" name="email" :value="old('email')"
                                    required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input id="remember_me" type="checkbox" class="form-check-input "
                                            name="remember">
                                        <label class="form-check-label" for="remember_me">{{ __('Remember me')
                                            }}</label>
                                    </div>
                                </div>

                                <!-- /.col -->
                                <div class="col-6">
                                    <div class="fog-pwd text-end">
                                        @if (Route::has('password.request'))
                                        <a class="hover-warning" href="{{ route('password.request') }}">

                                            {{ __('Forgot your password?') }}
                                        </a>
                                        @endif

                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <x-primary-button class="ms-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-warning ms-5">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection