<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
    @livewireStyles
    @livewireScripts

</head>
<body>
<div class="h-screen flex overflow-hidden bg-gray-50" x-data="{ sidebarOpen: false }"
     @keydown.window.escape="sidebarOpen = false">
    <x-app-layouts.sidebar/>

    <!-- Main column -->
    <div class="flex flex-col w-0 flex-1 overflow-hidden">
        <!-- Search header -->
        <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
            <button x-description="Sidebar toggle, controls the &apos;sidebarOpen&apos; sidebar state."
                    @click.stop="sidebarOpen = true"
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" x-description="Heroicon name: menu-alt-1" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </button>
            <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                <div class="flex-1 flex items-center">
                {{$header}}
                <!-- Freely add more content here -->
                </div>
                <div class="flex items-center">
                    <x-app-layouts.profile-dropdown/>
                </div>
            </div>
        </div>
        <main class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">
            <livewire:ui.ig-cta/>
            <div class="hidden lg:block" style="z-index: 100;">
                <div
                    class="border-b bg-white border-gray-200 px-2 py-4 sm:flex sm:items-center sm:justify-between sm:px-2 lg:px-4">
                    <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                        <div class="flex-1 flex items-center">
                            {{$header}}
                        </div>
                        <div class="flex items-center">
                            <x-app-layouts.profile-dropdown/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="maincontainer" class="px-4 mt-6 sm:px-6 lg:px-8" style="z-index: 0">
                {{ $slot }}
                @stack('modals')
            </div>
        </main>
    </div>
</div>
@stack('scripts')
@yield('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.9.0/devicon.min.css">
<x-livewire-alert::scripts/>
</body>
</html>
