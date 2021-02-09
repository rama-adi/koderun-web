@extends('layouts.guest-styled')
@push('head')
    <meta name="turbo-visit-control" content="reload">
@endpush
@section('content')
    <livewire:scratchbooks.show-public :scratchbook="$scratchbook" :team="$team"/>
    @push('head')
        <script type="module" src="{{asset('js/monaco/index.js')}}"></script>
    @endpush
@endsection
