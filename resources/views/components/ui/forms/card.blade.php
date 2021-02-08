@props(['header', 'form', 'submit'])
<section>
    <form wire:submit.prevent="{{ $submit }}">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-gray-50 px-4 py-5 sm:px-6">
                {{$header}}
            </div>
            <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                @if (isset($actions))
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        {{ $actions }}
                    </div>
                @endif
            </div>
        </div>
    </form>
</section>
