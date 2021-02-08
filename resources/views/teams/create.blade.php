<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat tim baru
        </h2>
    </x-slot>

    <main class=" max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
        @livewire('teams.create-team-form')
    </main>
</x-app-layout>

