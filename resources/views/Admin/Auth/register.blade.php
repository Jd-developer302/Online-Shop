@extends('adminlayout.layout')

@section('content')
<div class="row align-items-center justify-content-md-center h-p100" style="margin-top:10%">
    <div class="col-12">
        <div class="row justify-content-center g-0">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary">Get started with Us</h2>
                        <p class="mb-0">Register a new membership</p>
                    </div>
                    <div class="p-40">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                    autocomplete="name" placeholder="Name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <!-- Email Address -->
                            <div class="mt-4">

                                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                                    autocomplete="username" placeholder="Email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">

                                <x-text-input id="password" type="password" name="password" required
                                    autocomplete="new-password" placeholder="Password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                    
                                <x-text-input id="password_confirmation" 
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password"/>
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <x-primary-button class="ms-4">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">{{ __('Already registered?') }}<a href="{{ route('login') }}"
                                    class="text-danger ms-5"> Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection