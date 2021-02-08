<div>
    <button
        wire:click="$toggle('showCloneDialog')"
        class="flex items-center px-3 py-2 space-x-2 bg-gray-100 border border-gray-400 rounded-md hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
        <x-heroicon-o-duplicate class="w-4 h-4 text-gray-700"/>
        <span class="font-semibold">Clone</span>
    </button>

    <x-jet-confirmation-modal iconColor="blue" wire:model="showCloneDialog">
        <x-slot name="icon">
            <x-heroicon-o-duplicate class="h-6 w-6 text-blue-600"/>
        </x-slot>
        <x-slot name="title">
            Bagikan kode!
        </x-slot>

        <x-slot name="content">
            <p>Clone kode ke workspace anda!</p>
            <div class="mt-4 w-full">
                <label for="setTitle" class="block text-sm font-medium text-gray-700">Tentukan judul scratchbook</label>
                <x-jet-input wire:model="scratchTitle" type="text" id="setTitle" placeholder="Tentukan judul scratchbook!" class="mt-1 block w-full" />
                <x-jet-input-error for="scratchTitle" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="cloneScratchbook" wire:loading.attr="disabled">
                Clone!
            </x-jet-button>
            <x-jet-danger-button wire:click="$toggle('showCloneDialog')" wire:loading.attr="disabled">
                Batalkan
            </x-jet-danger-button>

        </x-slot>
    </x-jet-confirmation-modal>

</div>
