@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
<div class="md:ml-24 md:pl-4 lg:ml-32 lg:pl-8 lg:w-2/3 xl:w-2/5">

    <div class="flex items-center md:items-start my-8 -ml-4">

        <div class="px-4 py-4 w-full rounded-lg bg-blue-grey-100 border-t-8 border-yellow-400 shadow">
            <h1 class="text-lg md:text-2xl font-bold text-blue-grey-900 mt-0">{{ $page->title }}</h1>
            <p class="text-xs text-grey-600">{{ date('F j, Y', $page->date) }}</p>
        </div>

        @if ($page->cover != NULL)
            <img src="{{ $page->cover }}" alt="" class="-ml-4 md:mt-4 h-16 md:h-32 rounded-lg shadow-xl z-10">
        @endif
        
    </div>

    <div class="text-grey-800 leading-normal spaced-y-6">
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
</div>
@endsection