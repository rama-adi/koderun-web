@props(['title', 'description', 'content'])
<section>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-gray-50 px-4 py-5 sm:px-6">
            <h2
                class="text-lg leading-6 font-medium text-gray-900">{{$title}}</h2>
            <p class="mt-1 text-sm leading-5 text-gray-500">{{$description}}</p>
        </div>
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div class="my-4">
                {{$content}}
            </div>
        </div>
    </div>
</section>
