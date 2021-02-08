<x-ui.forms.card submit="updateTeamName">
    <x-slot name="header">
        <h2
            class="text-lg leading-6 font-medium text-gray-900">Nama workspace</h2>
        <p class="mt-1 text-sm leading-5 text-gray-500">Ini adalah nama workspace mu, kamu bebas menggantinya. namun, username tidak dapat diganti</p>
    </x-slot>
    <x-slot name="form">
        <!-- Team Owner Information -->
        <div class="col-span-6">
            <x-jet-label value="Pemilik"/>

            <div class="flex items-center mt-2">
                <img class="w-12 h-12 rounded-full object-cover" src="{{ $team->owner->profile_photo_url }}">

                <div class="ml-4 leading-tight">
                    <div>{{ $team->owner->name }}</div>
                    <div class="text-gray-700 text-sm">{{ $team->owner->email }}</div>
                </div>
            </div>
        </div>

        <!-- Team Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="Nama workspace"/>

            <x-jet-input id="name"
                type="text"
                class="mt-1 block w-full"
                wire:model.defer="state.name"/>
            <x-jet-input-error for="name" class="mt-2"/>
        </div>
    </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Sudah tersimpan.
            </x-jet-action-message>

            <x-jet-button>
                Simpan
            </x-jet-button>
        </x-slot>

</x-ui.forms.card>
