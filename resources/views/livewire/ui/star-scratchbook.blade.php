<div class="flex text-sm leading-none text-gray-900">
    @if($starred)
        <button
            wire:click="starAction"
            class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
            <x-heroicon-o-star class="w-4 h-4 text-gray-700"/>
            <span class="font-semibold">Batal bintangi</span>
        </button>
    @else
        <button
            wire:click="starAction"
            class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
            <x-heroicon-o-star class="w-4 h-4 text-gray-700"/>
            <span class="font-semibold">Bintangi</span>
        </button>
    @endif
        <span class="flex items-center -ml-px px-3 py-2 font-semibold border border-gray-400 rounded-r-md"
        >{{$stars}}</span>
</div>
