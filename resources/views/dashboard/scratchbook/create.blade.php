<x-app-layout>
    @push('head')
        <meta name="turbo-cache-control" content="no-cache">
    @endpush
    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Buat scratchbook baru
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
        </div>
    </x-slot>
    <livewire:scratchbooks.create />
    @push('head')
        <script type="module" src="{{asset('js/monaco/index.js')}}"></script>
    @endpush
</x-app-layout>
