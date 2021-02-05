<x-app-layout>

    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Lihat scratchbook
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
        </div>
    </x-slot>
   <livewire:scratchbooks.show-public :scratchbook="$scratchbook" :team="$team"/>
    @push('scripts')
        <script type="module" src="{{asset('js/monaco/index.js')}}"></script>
    @endpush
</x-app-layout>
