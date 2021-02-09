@extends('layouts.auth')

@section('header')
    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
        Silahkan masuk ke akun anda!
    </h2>
    <p class="mt-2 text-sm text-gray-600 max-w">
        Belum punya akun?
        <a href="{{route('register')}}" class="font-medium text-blue-600 hover:text-blue-500">
            Daftar sekarang!
        </a>
    </p>
@endsection

@section('content')

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-jet-label for="email" value="{{ __('Email') }}"/>
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            <x-jet-input-error for="email"/>

        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}"/>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="current-password"/>
            <x-jet-input-error for="password"/>
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember"/>
                <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                    Lupa password anda?--}}
{{--                </a>--}}
{{--            @endif--}}

            <x-jet-button class="ml-4">
                Login
            </x-jet-button>
        </div>
    </form>
@endsection
