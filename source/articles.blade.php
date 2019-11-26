---
pagination:
    collection: articles
    perPage: 5
---

@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Articles" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Articles on {{ $page->siteName }}" />
@endpush

@section('body')
<div class="md:w-3/4 lg:w-2/3 mx-auto">
    <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
        <h2 class="text-2xl font-display tracking-wide">Articles</h2>
    </div>
    <div class="px-4 mt-8 text-lg leading-normal">
        <p>Articles give us a chance to deeper into the details of business strategy and analytics.</p>
    </div>

    <section class="md:flex md:flex-wrap">
        @foreach ($pagination->items as $post)
            @include('_components.post-preview-inline')
        @endforeach
    </section>

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
