<x-app-layout>
    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Semua scratchbook workspacemu
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
        </div>
    </x-slot>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Scratchbook workspacemu
            </h3>
            <div class="mt-2 sm:flex sm:items-start sm:justify-between">
                <div class="max-w-xl text-sm text-gray-500">
                    <p>
                        Berikut adalah scratchbook dari workspace mu!
                    </p>
                </div>
                <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                    <a href="{{route('scratchbook.create')}}"
                            class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm">
                        Scratchbook baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md mt-4">
        <ul class="divide-y divide-gray-200">
            @foreach(\App\Models\Scratchbook::currentTeam()->orderBy('created_at','desc')->get() as $scratchbook)
                <li>
                    <a href="{{route('scratchbook.show', ['team' => $scratchbook->team->username, 'slug' => $scratchbook->slug])}}"
                       class="block hover:bg-gray-50">
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
                                        <p class="text-sm font-medium text-blue-600 truncate">{{$scratchbook->title}}</p>
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
</x-app-layout>
