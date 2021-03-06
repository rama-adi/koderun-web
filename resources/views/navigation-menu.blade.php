<div x-show="sidebarOpen" class="lg:hidden"
     x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state.">
    <div class="fixed inset-0 flex z-40">
        <div @click="sidebarOpen = false" x-show="sidebarOpen"
             x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0"
             aria-hidden="true">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state."
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
             class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button x-show="sidebarOpen" @click="sidebarOpen = false"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: x"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-shrink-0 flex items-center">
                <x-jet-application-logo class="px-4 h-8 w-auto"/>
            </div>
            <div class="mt-5 flex-1 h-0 overflow-y-auto">

                <x-new-scratchbook-button :mobile="true"/>

                <nav class="px-2">
                    <div class="space-y-1">
                       <x-app-layouts.sidebar />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="mt-8">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                id="teams-headline">
                                Workspace kamu
                            </h3>
                            <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                                <!-- Team Settings -->
                                <x-jet-responsive-nav-link
                                    href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                    :active="request()->routeIs('teams.show')">
                                    Pengaturan workspace
                                </x-jet-responsive-nav-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                                                               :active="request()->routeIs('teams.create')">
                                        Buat workspace baru
                                    </x-jet-responsive-nav-link>
                                @endcan
                            </div>
                        </div>
                        <div class="mt-8">
                            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                id="workspace-switch">
                                Ubah workspace
                            </h3>
                            <div class="mt-1 space-y-1" role="group" aria-labelledby="workspace-switch">
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link"/>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64 border-r border-gray-200 pt-5 pb-4 bg-gray-100">
        <div class="flex items-center flex-shrink-0 px-6">
            <x-jet-application-logo />
        </div>
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="h-0 flex-1 flex flex-col overflow-y-auto">
            <!-- User account dropdown -->
            <!-- Navigation -->
            <x-new-scratchbook-button :mobile="false" />
            <nav class="px-3 mt-6">
                <div class="space-y-1">
                    <x-app-layouts.sidebar />
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="mt-8">
                        <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                            id="teams-headline">
                            Workspace kamu
                        </h3>
                        <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                            <!-- Team Settings -->
                            <x-jet-responsive-nav-link
                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                :active="request()->routeIs('teams.show')">
                                Pengaturan workspace
                            </x-jet-responsive-nav-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                                                           :active="request()->routeIs('teams.create')">
                                    Buat workspace baru
                                </x-jet-responsive-nav-link>
                            @endcan
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                            id="workspace-switch">
                            Ubah workspace
                        </h3>
                        <div class="mt-1 space-y-1" role="group" aria-labelledby="workspace-switch">
                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link"/>
                            @endforeach
                        </div>
                    </div>
                @endif
            </nav>
        </div>
    </div>
</div>
