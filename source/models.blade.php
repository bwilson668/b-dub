---
pagination:
    collection: models
    perPage: 5
---

@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Models" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Analytic models for business and strategy on {{ $page->siteName }}" />
@endpush

@section('body')
<div class="md:ml-24 md:pl-4 lg:ml-32 lg:pl-8 lg:w-2/3 xl:w-2/5">
    <h1 class="text-2xl font-display text-blue-800 mb-4 tracking-wide">Models</h1>

    <div class="text-lg text-grey-800 leading-normal spaced-y-6">
        <p>This is where the rubber meets the road. The concepts we discuss are put into practice to answer questions about your business, and hopefully spur new impactful ones!</p>
    </div>

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        {{-- @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif --}}
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-grey-300 hover:bg-grey-100 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-grey-300 hover:bg-grey-100 text-primary-2 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-primary-3' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-grey-300 hover:bg-grey-100 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
</div>
@endsection
