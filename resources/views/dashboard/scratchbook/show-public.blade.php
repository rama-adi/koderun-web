@push('head')
    <meta name="turbo-visit-control" content="reload">
@endpush
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
    @if (session('successState'))
        <div class="alert alert-success">
            <div class="bg-green-50-50 border-l-4 border-green-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/exclamation -->
                        <x-heroicon-o-check-circle class="h-5 w-5 text-green-400"/>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700">
                            {{ session('successState') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <livewire:scratchbooks.show-public :scratchbook="$scratchbook" :team="$team"/>
    @push('scripts')
        <script type="module" src="{{asset('js/monaco/index.js')}}"></script>
    @endpush
</x-app-layout>


