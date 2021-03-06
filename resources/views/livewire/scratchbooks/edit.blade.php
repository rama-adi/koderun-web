<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        <div>
            <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                <div class="bg-white px-4 py-3 sm:px-5">
                    <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                        @if(!$changeNameDialog)
                            <div class="ml-4 mt-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="h-12 w-12 rounded-full bg-blue-500 text-2xl flex items-center justify-center  text-white">
                                            <i class="{{ scratch_lang($scratchbook->language)['icon'] }}"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 text-truncate">
                                            {{$title}}
                                        </h3>
                                        @error('title') <p class="text-sm text-red-500">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 mt-4 flex-shrink-0 flex">
                                <button onclick="changeName()" type="button"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: phone -->
                                    <div class="-ml-1 mr-2 h-5 w-5 text-gray-400">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </div>
                                    <span>
                                      Ganti nama
                                    </span>
                                </button>
                                <button wire:click="saveScratchbook" type="button"
                                        class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: mail -->
                                    <div class="-ml-1 mr-2 h-5 w-5 text-gray-400">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                                        </svg>
                                    </div>
                                    <span>
                                      Simpan
                                    </span>
                                </button>
                            </div>
                        @else
                            <div class="mt-4 ml-4 w-full">
                                <label for="scratchbookchangename" class="sr-only">Ganti nama scratchbook</label>
                                <input type="text" id="scratchbookchangename"
                                       x-data=""
                                       x-on:keydown.enter="@this.call('changeScratchbookName')"
                                       wire:model="tempVar.changeName"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Ketik nama scratchbook baru">
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="ml-2 mt-4 relative z-0 inline-flex shadow-sm rounded-md">
                                <button type="button" wire:click="changeScratchbookName"
                                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Simpan
                                </button>

                                <button type="button" wire:click="cancelRename"
                                        class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Batalkan
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <textarea readonly id="initialCode" style="display: none;">{!! $scratchbook->code !!}</textarea>
                    <div wire:ignore>
                        <wc-monaco-editor
                            wire:model.defer="code"
                            id="codeeditor" language="{{ scratch_lang($scratchbook->language)['monaco'] }}"
                            style="height: 70vh;"></wc-monaco-editor>
                    </div>
                    <div class="m-4">@error('code') <p class="text-sm text-red-500">{{$message}}</p> @enderror</div>
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

    <script data-turbo-eval="false">
        var _codeEditorValue;

        window.onload = function () {
            _codeEditorValue = document.getElementById('initialCode').value;
            @this.set('code', document.getElementById('initialCode').value);

            document.getElementById('codeeditor').value = document.getElementById('initialCode').value;
            window.addEventListener('eval-output', function (event) {
                !(event.detail instanceof Object) ? document.getElementById('eval-output').srcdoc = event.detail : "";
            });

            document.getElementById('codeeditor').editor.onDidChangeModelContent(function () {
                _codeEditorValue = document.getElementById('codeeditor').value;
            });
            document.getElementById('codeeditor').editor.addCommand(monaco.KeyMod.CtrlCmd | monaco.KeyCode.Enter, function () {
                setAndSend();
            })
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
            @this.
            set('code', _codeEditorValue);
            document.getElementById('eval-output').srcdoc = _codeEditorValue;
        }

        @else
        async function setAndSend() {
            await @this.
            set('code', _codeEditorValue);
            @this.
            call('showInterstitial').then(function () {
                @this.
                call('showOutput')
            });
        }
        @endif

        function changeName () {
            @this.
            set('code', _codeEditorValue);
            @this.
            set('changeNameDialog', true);
        }

    </script>
</div>
