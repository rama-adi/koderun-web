@props(['title', 'icon', 'active' => false, 'url' => ''])
<a href="{{$url}}"
   class="{{$active === true ? "group bg-gray-50 rounded-md px-3 py-2 flex items-center text-sm leading-5 font-medium text-green-600 hover:bg-white focus:outline-none focus:bg-white transition ease-in-out duration-150" : "text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium"}}"{{$active === true ? 'aria-current="page"' : ''}}>
    <i class="{{$icon}} fa-lg {{$active === true ? "-ml-1 mr-3 text-green-500 transition ease-in-out duration-150" : "text-gray-400 group-hover:text-gray-500 -ml-1 mr-3"}} "></i>
    <span class="truncate">
            {{$title}}
    </span>
</a>
