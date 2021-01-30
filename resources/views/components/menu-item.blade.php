@props(['active' => false, 'icon' => null, 'title' => 'title', 'href' => '#'])

@if($active)
    <a href="{{$href}}"
       class="bg-blue-100 text-blue-900 group flex items-center px-2 py-2 text-sm font-bold rounded-md">
        <span class="text-blue-900 mr-3 h-6 w-6">
            {{$icon}}
        </span>
        {{$title}}
    </a>
@else
    <a href="{{$href}}"
       class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <span class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6">
            {{$icon}}
        </span>
        {{$title}}
    </a>
@endif

