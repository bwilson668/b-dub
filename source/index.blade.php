@extends('_layouts.master')

@section('body')
<div class="md:w-3/4 lg:w-2/3 mx-auto">

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
        <a href="/articles" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Check out all the articles &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
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
        
        <a href="/units" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Review all the units &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
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
        <a href="/models" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Explore all the models &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>
</div>
@endsection
