@extends('layouts.empty')
@section('body')
    <div class="m-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Hasil Cloud Runner KodeRun
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Berikut adalah hasil running kode anda!
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Status
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @if(filled($stderr))
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                              <x-heroicon-s-x-circle class="-ml-1 mr-1.5 h-4 w-4 text-red-400"/>
                              Error!
                            </span>
                            @else
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                              <x-heroicon-s-check-circle class="-ml-1 mr-1.5 h-4 w-4 text-green-400"/>
                              Sukses!
                            </span>
                            @endif
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Bahasa
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <p class="flex">
                                <span class="text-blue-500 {{scratch_lang($language)['icon']}} text-2xl"></span>
                                <span class="ml-2">{{scratch_lang($language)['display']}} / {{$version}}</span>
                            </p>
                        </dd>
                    </div>
                    @if(filled($stderr))
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Stderr
                            </dt>
                            <dd class="mt-1 overflow-x-scroll text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <pre><code>{{$stderr}}</code></pre>
                            </dd>
                        </div>
                    @endif
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Output
                        </dt>
                        <dd class="mt-1 overflow-x-scroll text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <pre><code>{{$output}}</code></pre>
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Stdout
                        </dt>
                        <dd class="mt-1 text-sm overflow-x-scroll text-gray-900 sm:mt-0 sm:col-span-2">
                            <pre><code>{{$stdout}}</code></pre>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>
@endsection
