@extends('layouts.auth')

@section('header')
    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
       Daftar dan mulai posting kode!
    </h2>
    <p class="mt-2 text-sm text-gray-600 max-w">
        Sudah punya akun?
        <a href="{{route('login')}}" class="font-medium text-blue-600 hover:text-blue-500">
            Yuk masuk!
        </a>
    </p>
@endsection

@section('content')

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-jet-label for="name" value="{{ __('Nama') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-jet-input-error for="name" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-jet-input-error for="email" />
        </div>

        <div class="mt-4">
            <x-jet-label for="Username" value="{{ __('Username workspace') }}" />
            <x-jet-input id="Username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            <x-jet-input-error for="Username" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-jet-input-error for="password" />

        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" />

        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms"/>

                        <div class="ml-2">
                            {!! __('Saya menyetujui :terms_of_service dan :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Register') }}
            </x-jet-button>
        </div>
    </form>
@endsection
