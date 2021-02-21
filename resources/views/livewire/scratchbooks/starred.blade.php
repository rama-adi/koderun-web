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
                Scratchbook dibintangi
            </h3>
            <div class="mt-2 sm:flex sm:items-start sm:justify-between">
                <div class="max-w-xl text-sm text-gray-500">
                    <p>
                        Berikut adalah scratchbook yang dibintangi oleh workspace mu, baik dibintangi anggota workspace
                        atau tim!
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if(count(Auth::user()->currentTeam->starred()->limit(1)->get()) > 0)
        <div class="bg-white shadow overflow-hidden sm:rounded-md mt-4">
            <ul class="divide-y divide-gray-200">
                @foreach(Auth::user()->currentTeam->starred()->limit(5)->get() as $starred)
                    <li>
                        <a href="{{route('scratchbook.show', ['team' => $starred->team->username, 'slug' => $starred->slug])}}"
                           class="block hover:bg-gray-50">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="h-12 w-12 rounded-full bg-blue-500 text-2xl flex items-center justify-center  text-white">
                                            <i class="{{ scratch_lang($starred->language)['icon'] }}"></i>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                        <div>
                                            <p class="text-sm font-medium text-blue-600 truncate">{{$starred->title}}</p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: mail -->
                                                <x-heroicon-o-code
                                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"/>
                                                <span
                                                    class="truncate">{{scratch_lang($starred->language)['display']}}</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900">
                                                    Dibuat pada
                                                    <time
                                                        datetime="{{$starred->created_at->format('Y-m-d')}}">{{$starred->created_at->format('d-M-Y')}}</time>
                                                </p>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    Terakhir diedit
                                                    <time
                                                        datetime="{{$starred->updated_at->format('Y-m-d')}}">{{$starred->updated_at->format('d-M-Y')}}</time>
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
    @else
       <div class="mt-4">
           <div class="rounded-md bg-yellow-50 p-4 mt-4">
               <div class="flex">
                   <div class="flex-shrink-0">
                       <!-- Heroicon name: solid/exclamation -->
                       <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                           <path fill-rule="evenodd"
                                 d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                 clip-rule="evenodd"/>
                       </svg>
                   </div>
                   <div class="ml-3">
                       <h3 class="text-sm font-medium text-yellow-800">
                           Belum membintangi apapun!
                       </h3>
                       <div class="mt-2 text-sm text-yellow-700">
                           <p>
                               Tim mu belum membintangi scratchbook apapun!
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    @endif
</x-app-layout>
