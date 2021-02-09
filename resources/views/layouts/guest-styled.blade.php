<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    @stack('head')
    @stack('styles')
    @livewireStyles
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<nav x-data="{ open: false }" class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="open = !open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            x-bind:aria-expanded="open" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <svg x-state:on="Menu open" x-state:off="Menu closed"
                             :class="{ &apos;hidden&apos;: open, &apos;block&apos;: !open }" class="block h-6 w-6"
                             x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!-- Icon when menu is open. -->
                        <svg x-state:on="Menu open" x-state:off="Menu closed"
                             :class="{ &apos;hidden&apos;: !open, &apos;block&apos;: open }" class="hidden h-6 w-6"
                             x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <div class="block lg:hidden w-auto">
                        <x-jet-authentication-card-logo/>
                    </div>
                    <div class="hidden lg:block w-auto">
                        <x-jet-application-logo/>
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href="#"
                       class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Lihat kode
                    </a>
                    {{--                    <a href="#"--}}
                    {{--                       class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">--}}
                    {{--                        Explore--}}
                    {{--                    </a>--}}
                    <a href="{{route('welcome')}}"
                       class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Kembali ke homepage
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <a href="{{route('register')}}" class="mr-6 text-gray-500 hover:text-gray-700 text-sm font-medium">
                    Register
                </a>
                <div class="flex-shrink-0">
                    <a href="{{route('login')}}"
                       class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <!-- Heroicon name: solid/plus -->
                        <x-heroicon-o-login class="-ml-1 mr-2 h-5 w-5"/>
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            <a href="#" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Lihat kode</a>
            <a href="{{route('welcome')}}" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium sm:pl-5 sm:pr-6">Ke homepage</a>
        </div>
    </div>
</nav>

<div class="font-sans text-gray-900 antialiased px-4 mt-6 sm:px-6 lg:px-8">
    <div class="alert alert-success">
        <div class="bg-green-50 border-l-4 border-green-400 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/exclamation -->
                    <x-heroicon-o-login class="h-5 w-5 text-green-400"/>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700">
                        Login dan dapatkan lebih banyak fitur!
                    </p>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</div>
@livewireScripts
@stack('scripts')
@yield('scripts')
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.9.0/devicon.min.css">
<x-livewire-alert::scripts/>
</body>
</html>
