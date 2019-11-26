@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
<div class="md:w-3/4 lg:w-2/3 mx-auto">
    <h1 class="text-lg md:text-3xl font-bold">{{ $page->title }}</h1>

    <div class="content">
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; <span class="border-b-2 border-transparent hover:border-gray-100">{{ $next->title }}</span>
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    <span class="border-b-2 border-transparent hover:border-gray-100">{{ $previous->title }}</span> &RightArrow;
                </a>
            @endif
        </div>
    </nav>
</div>
@endsection