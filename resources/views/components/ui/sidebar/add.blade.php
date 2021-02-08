@props(['sideNavbar', 'content' => ""])
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

    <!-- Side nav -->
    <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
        <nav class="space-y-1 sm:px-10">
            {{$sideNavbar}}
        </nav>
    </aside>


    <!-- Content -->
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        {{$content}}
    </div>
</div>
