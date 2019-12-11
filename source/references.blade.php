@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} References" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="References on {{ $page->siteName }}" />
@endpush

@section('body')
<div class="md:w-3/4 lg:w-2/3 mx-auto">
    <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
        <h2 class="text-2xl font-display tracking-wide">References</h2>
    </div>
    <div class="px-4 mt-8 text-lg leading-normal spaced-y-6">
        <p>A friend told me an amusing little story about Albert Einstein. It went like, Einstein was at a dinner party and a collegues asked him for his number. Einstein found a phone book and looked up his name. "You don't remeber your own number?" the colleague asked.</p>
        <p>"No," Einstein answered. "Why should I memorize sometihng I can so easily get from a book?"</p>
        <p>While this material is more complex than a phone number, there are a significant number of terms, concepts, and helpful shortcuts to remember. This is meant to be the raw materials that goes into all higher level work.</p>
    </div>

    
    @foreach ($page->getTags()['references'] as $tag)
        <div>
            <div class="sticky top-16 fade-grey-reverse px-4 py-1 mt-8">
                <h3 class="text-2xl text-right font-display tracking-wide">{{ $tag }}</h3>
            </div>
            <section class="md:flex md:flex-wrap mt-8">
                @foreach ($references as $post)
                    @if(in_array($tag, $post->tags))
                        @include('_components.post-preview-inline')
                    @endif
                @endforeach
            </section>
        </div>
    @endforeach
</div>
@endsection
