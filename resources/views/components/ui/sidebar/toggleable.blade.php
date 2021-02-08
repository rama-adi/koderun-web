@props(['opener', 'contents', 'title'])
<div {{$attributes}} @keydown.window.escape="{{$opener}} = false" x-show="{{$opener}}"
     class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div x-show="{{$opener}}" x-description="Background overlay, show/hide based on slide-over state."
             x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <section @click.away="{{$opener}} = false;" class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
            <div class="w-screen max-w-md" x-description="Slide-over panel, show/hide based on slide-over state."
                 x-show="{{$opener}}" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                <div class="h-full flex flex-col space-y-6 py-6 bg-white shadow-xl overflow-y-scroll">
                    <header class="px-4 sm:px-6">
                        <div class="flex items-start justify-between space-x-3">
                            <h2 class="text-lg leading-7 font-medium text-gray-900">
                                {{$title}}
                            </h2>
                            <div class="h-7 flex items-center">
                                <button @click="{{$opener}} = false" aria-label="Close panel"
                                        class="text-gray-400 hover:text-gray-500 transition ease-in-out duration-150">
                                    <svg class="h-6 w-6" x-description="Heroicon name: x"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </header>
                    <div class="relative flex-1 px-4 sm:px-6">

                        <div class="absolute inset-0 px-4 sm:px-6">
                            <div class="h-full">
                                {{$contents}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
