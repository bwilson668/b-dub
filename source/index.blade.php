@extends('_layouts.master')

@section('body')
<div class="md:w-3/4 lg:w-2/3 mx-auto">

    <div class="flex items-start">
        <img src="https://assets.benjaminandrewwilson.com/bw-square.jpg" alt="Ben Wilson - That's me!" class="hidden md:block w-1/5 border-grey-700 border-4">
        <div class="mx-4 md:ml-8">
            <h1 class="text-3xl font-thin">
                Hi, I'm Ben.
                <span class="text-2xl font-thin tracking-wide">
                    I am a data scientist applying my trade at the intersection of 
                    <span class="bg-grey-700 px-2">data ∩ business.</span>
                </span>
            </h1>
            <p class="text-grey-400 mt-4">Take a look around, follow along, or get in touch to join in on this cross-discipline journey.</p>
        </div>
    </div>

    <div id="reference" class="mt-24">
        <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
            <h2 class="text-2xl font-display tracking-wide">References</h2>
        </div>
        <div class="px-4 mt-8 text-lg leading-normal spaced-y-6">
            <p>A friend told me an amusing little story about Albert Einstein. It went like, Einstein was at a dinner party and a collegues asked him for his number. Einstein found a phone book and looked up his name. "You don't remeber your own number?" the colleague asked.</p>
            <p>"No," Einstein answered. "Why should I memorize sometihng I can so easily get from a book?"</p>
            <p>While this material is more complex than a phone number, there are a significant number of terms, concepts, and helpful shortcuts to remember. This is meant to be the raw materials that goes into all higher level work.</p>
        </div>
        @foreach ($page->getTags()['references'] as $tag)
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
        @endforeach
        
        <a href="/articles" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold float-right mx-4">See all the references &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>

    <div id="articles" class="mt-24">
        <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
            <h2 class="text-2xl font-display tracking-wide">Articles</h2>
        </div>
        <div class="px-4 mt-8 text-lg leading-normal">
            <p>Articles give us a chance to deeper into the details of business strategy and analytics.</p>
        </div>
        <section class="md:flex md:flex-wrap">
            @foreach ($articles as $post)
                @if($post->featured)
                    @include('_components.post-preview-inline')
                @endif
            @endforeach
        </section>
        <a href="/articles" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold float-right mx-4">Check out all the articles &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>

    <div id="units" class="mt-24">
        <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
            <h2 class="text-2xl font-display tracking-wide">Units</h2>
        </div>
        <div class="px-4 mt-8 text-lg leading-normal spaced-y-6">
            <p>Have you ever been in a conversation where it feels like you are talking right past each other? This is a problem of different units.</p>
            <p>This section is meant to set the foundation for conversation. Get your team on the same page and you'll be shocked how fast you can move.</p>
        </div>
        <section class="md:flex md:flex-wrap">
            @foreach ($units as $post)
                @if($post->featured)
                    @include('_components.post-preview-inline')
                @endif
            @endforeach
        </section>
        
        <a href="/units" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold float-right mx-4">Review all the units &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>

    <div id="models" class="mt-24">
        <div class="sticky top-16 fade-yellow px-4 py-1 text-gray-800">
            <h2 class="text-2xl font-display tracking-wide">Models</h2>
        </div>
        <div class="px-4 mt-8 text-lg leading-normal spaced-y-6">
            <p>This is where the rubber meets the road. The concepts we discuss are put into practice to answer questions about your business, and hopefully spur new impactful ones!</p>
        </div>
        <section class="md:flex md:flex-wrap">
            @foreach ($models as $post)
                @if($post->featured)
                    @include('_components.post-preview-inline')
                @endif
            @endforeach
        </section>
        <a href="/models" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold float-right mx-4">Explore all the models &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>
</div>
@endsection
