@props(['mobile' => false])
@if(!Route::is('scratchbook.create'))

    <div x-data="{ show: false }" class="{{$mobile ? "px-2 mb-4" : "px-3 mt-6"}}">
        <a href="{{route('scratchbook.create')}}" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <!-- Heroicon name: mail -->
            <svg class="-ml-1 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Scratchbook baru
        </a>
    </div>
@endif
