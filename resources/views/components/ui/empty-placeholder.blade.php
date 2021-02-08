@props(['illustration' => null, 'content' => null])
<div class="flex items-center justify-center border-2 border-dashed border-gray-300 rounded h-screen-1/2 w-full">
    <div>
        {{$illustration}}
        <div class="mt-4">
            {{$content}}
        </div>
    </div>
</div>
