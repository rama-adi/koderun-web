<x-ui.forms.card submit="updatePassword">
    <x-slot name="header">
        <h2
            class="text-lg leading-6 font-medium text-gray-900">Update Password</h2>
        <p class="mt-1 text-sm leading-5 text-gray-500">Untuk mencegah akses yang tidak diizinkan, pastikan akunmu
            menggunakan password yang aman.</p>
    </x-slot>
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="Password saat ini"/>
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.current_password" autocomplete="current-password"/>
            <x-jet-input-error for="current_password" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="Password baru"/>
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="Konfirmasi" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Tersimpan.
        </x-jet-action-message>

        <x-jet-button>
            Simpan
        </x-jet-button>
    </x-slot>
</x-ui.forms.card>
