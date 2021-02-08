<div class="mt-10 sm:mt-0">
    <x-ui.forms.card submit="createTeam">
        <x-slot name="header">
            <h2
                class="text-lg leading-6 font-medium text-gray-900">Buat workspace baru</h2>
            <p class="mt-1 text-sm leading-5 text-gray-500">Workspace digunakan untuk mengorganisasikan scratchbook dan kolaborasi. buat workspace dengan mengisi formulir dibawah!</p>
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="Username" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="state.username" />
                <x-jet-input-error for="username" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="Nama workspace" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name"/>
                <x-jet-input-error for="name" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-button>
                Buat tim
            </x-jet-button>
        </x-slot>
    </x-ui.forms.card>
</div>
