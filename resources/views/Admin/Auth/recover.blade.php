@extends('adminlayout.layout')

@section('content')
<div class="row align-items-center justify-content-md-center h-p100" style="margin-top: 15%">

    <div class="col-12">
        <div class="row justify-content-center g-0">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h3 class="mb-0 text-primary">Recover Password</h3>
                    </div>
                    <div class="p-40">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div>
                                
                                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus  placeholder="Your Email"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <x-primary-button>
                                        {{ __('Email Password Reset Link') }}
                                    </x-primary-button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection