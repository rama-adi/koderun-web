<div>
    <div class="block bg-white shadow overflow-hidden sm:rounded-md mt-4">
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
                        <p class="text-sm font-medium truncate">{{$scratchbook->title}}</p>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <p class="flex">
                                <x-heroicon-o-code
                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"/>
                                <span
                                    class="truncate">{{scratch_lang($scratchbook->language)['display']}}</span>
                            </p>
                            <p class="mx-2"> / </p>
                            <p class="text-blue-600 hover:text-blue-800">
                                <a href="#" class="font-medium truncate">
                                    {{ "@" . $team->username }} @if($team->verified())
                                        <x-heroicon-o-badge-check class="h-4 inline"/> @endif</a>
                            </p>
                        </div>
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
                <ul class="flex flex-col items-start space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                    @can('star', $scratchbook)
                        <li class="flex text-sm leading-none text-gray-900">
                            <button
                                class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-l-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                                <x-heroicon-o-star class="w-4 h-4 text-gray-700"/>
                                <span class="font-semibold">Bintangi</span>
                            </button>
                            <a class="flex items-center -ml-px px-3 py-2 font-semibold border border-gray-400 rounded-r-md"
                               href="#_">124</a>
                        </li>
                    @endcan

                    <li class="flex text-sm leading-none text-gray-900">
                        <button
                            class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                            <x-heroicon-o-duplicate class="w-4 h-4 text-gray-700"/>
                            <span class="font-semibold">Clone</span>
                        </button>
                    </li>

                    @can('update', $scratchbook)
                        <li class="flex text-sm leading-none text-gray-900">
                            <button
                                class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                                <x-heroicon-o-pencil class="w-4 h-4 text-gray-700"/>
                                <span class="font-semibold">Edit</span>
                            </button>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        <div>
            <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                <div class="bg-white px-4 py-3 sm:px-5">
                    <div class="flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 text-truncate">
                            Kode
                        </h3>
                        <div class="ml-4 flex-shrink-0 flex">
                            <a target="_blank"
                               href="{{route('scratchbook.show_raw', ['team' => $team->username, 'slug' => $scratchbook->slug])}}"
                               type="button"
                               class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <!-- Heroicon name: mail -->
                                <div class="-ml-1 mr-2 h-5 w-5 text-gray-400">
                                    <x-heroicon-o-document-text/>
                                </div>
                                <span>
                                      Lihat raw
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div wire:ignore>
                        <wc-monaco-editor
                            id="codeeditor"
                            src="{{route('scratchbook.show_raw', ['team' => $team->username, 'slug' => $scratchbook->slug])}}"
                            language="{{ scratch_lang($scratchbook->language)['name'] }}"
                            style="height: 70vh;"></wc-monaco-editor>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                <div class="bg-white px-4 py-3 sm:px-5">
                    <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        <div class="ml-4 mt-4">
                            <div class="flex items-center">
                                <h3 class="text-lg leading-6 font-medium text-gray-900 text-truncate">
                                    Output
                                </h3>
                            </div>
                        </div>
                        <div class="ml-4 mt-4 flex-shrink-0 flex">
                            <button
                                x-data=""
                                @click="setAndSend()"
                                type="button"
                                class="ml-3 relative inline-flex items-center px-4 py-2 border border-green-300 shadow-sm text-sm font-medium rounded-md text-green-500 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">

                                <svg class="-ml-1 mr-2 h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>
                                      Run (Ctrl + Enter)
                                    </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <iframe allow="encrypted-media" allowfullscreen frameborder="0"
                            style="width: 100%; height: 70vh;" id="eval-output"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            window.addEventListener('eval-output', function (event) {
                !(event.detail instanceof Object) ? document.getElementById('eval-output').srcdoc = event.detail : ""
            });
            document.getElementById('codeeditor').editor.addCommand(monaco.KeyMod.CtrlCmd | monaco.KeyCode.Enter, function () {
                setAndSend();
            })
            document.getElementById('codeeditor').editor.updateOptions({readOnly: true});
            document.onkeyup = function (e) {
                var evt = window.event || e;
                if (!(document.getElementById('codeeditor').editor.hasTextFocus())) {
                    if (evt.keyCode == 13 && evt.ctrlKey) {
                        setAndSend();
                    }
                }
            }
        }
        @if(scratch_lang($scratchbook->language)['treatment'] === \App\Enums\ScratchTreatment::OUTPUT)
        function setAndSend() {
            document.getElementById('eval-output').srcdoc = document.getElementById('codeeditor').value;
        }
        @else
        function setAndSend() {
            @this.
            call('setOutput');
        }
        @endif
    </script>
</div>
