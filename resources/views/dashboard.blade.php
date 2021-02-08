<x-app-layout>

    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                {{ __('Dashboard') }}
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">

        </div>
    </x-slot>
    <div
        class="relative overflow-hidden flex flex-col items-center w-full px-4 py-8 mx-auto text-center rounded-lg shadow-2xl lg:text-left lg:block bg-gradient-to-br from-blue-800 to-teal-600 sm:px-6 md:pb-0 md:pt-12 lg:px-12 lg:py-12">
        <h2
            class="my-4 text-3xl font-bold tracking-tight text-white sm:text-4xl md:text-5xl lg:my-0 xl:text-4xl sm:leading-tight">
            Selamat datang di koderun!
        </h2>
        <p class="mt-1 mb-10 text-sm font-medium text-indigo-200 uppercase xl:text-base xl:tracking-wider lg:mb-0">
            Yuk mulai buat scratchbook, dan jalankan kodemu!
        </p>
        <div class="flex mb-8 lg:mt-6 lg:mb-0">
            <div class="inline-flex">
                <a href="#"
                   class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300">
                    Buat scratchbook
                </a>
            </div>
        </div>
        <div class="hidden xl:block bottom-0 right-0 mb-0 mr-3 lg:absolute lg:-ml-4">
            <img src="{{asset('img/dev-gitactivity.svg')}}"
                 class="max-h-xs mb-4 md:max-w-2xl lg:max-w-lg xl:mb-0 xl:max-w-md" alt="cta welcome">
        </div>
    </div>

    <div class="md:grid md:grid-cols-2 md:gap-6">
        <div class="mt-8">
            <h2 class="text-lg leading-6 font-medium text-gray-900">
                Scratchbook terbaru
            </h2>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-md mt-4">
                <ul class="divide-y divide-gray-200">
                    @foreach(\App\Models\Scratchbook::currentTeam()->orderBy('created_at','desc')->limit(5)->get() as $scratchbook)
                        <li>
                            <a href="{{route('scratchbook.show', ['team' => $scratchbook->team->username, 'slug' => $scratchbook->slug])}}" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="min-w-0 flex-1 flex items-center">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="h-12 w-12 rounded-full bg-blue-500 text-2xl flex items-center justify-center  text-white">
                                                <i class="{{ scratch_lang($scratchbook->language)['icon'] }}"></i>
                                            </div>
                                        </div>
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                            <div>
                                                <p class="text-sm font-medium text-indigo-600 truncate">{{$scratchbook->title}}</p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: mail -->
                                                    <x-heroicon-o-code
                                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"/>
                                                    <span
                                                        class="truncate">{{scratch_lang($scratchbook->language)['display']}}</span>
                                                </p>
                                            </div>
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Dibuat pada
                                                        <time
                                                            datetime="{{$scratchbook->created_at->format('Y-m-d')}}">{{$scratchbook->created_at->format('d-M-Y')}}</time>
                                                    </p>
                                                    <p class="mt-2 text-sm text-gray-500">
                                                        Terakhir diedit
                                                        <time
                                                            datetime="{{$scratchbook->updated_at->format('Y-m-d')}}">{{$scratchbook->updated_at->format('d-M-Y')}}</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-lg leading-6 font-medium text-gray-900">
                Scratchbook yang dibintangi
            </h2>
            <!--<p class="mt-2 text-gray-400">Yah, tim mu belum menyimpan scratchbook apapun!</p> -->
            <p class="mt-2 text-gray-400">Fitur ini coming soon!</p>
        </div>
    </div>

</x-app-layout>
