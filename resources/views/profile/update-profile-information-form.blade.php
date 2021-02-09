<x-ui.forms.card submit="updateProfileInformation">
    <x-slot name="header">
        <h2
            class="text-lg leading-6 font-medium text-gray-900">Informasi profil</h2>
        <p class="mt-1 text-sm leading-5 text-gray-500">Update informasi profil dan email address kamu.</p>
    </x-slot>
    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="Foto" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="object-cover rounded-full h-20 w-20">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    Pilih foto baru
                </x-jet-secondary-button>

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
    @endif

    <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="Nama"/>
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                         autocomplete="name"/>
            <x-jet-input-error for="name" class="mt-2"/>
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="Email"/>
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email"/>
            <x-jet-input-error for="email" class="mt-2"/>
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Tersimpan
        </x-jet-action-message>

        <x-jet-button>
            Simpan
        </x-jet-button>
    </x-slot>
</x-ui.forms.card>


