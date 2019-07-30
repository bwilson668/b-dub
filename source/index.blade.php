@extends('_layouts.master')

@section('body')
<div class="md:ml-24 md:pl-4 lg:ml-32 lg:pl-8 lg:w-2/3 xl:w-2/5">
    <h1 class="text-2xl font-medium text-blue-grey-900 mb-4 font-sans">Tell me about yourself</h1>
    <div class="text-lg text-grey-800 leading-normal spaced-y-6">
        <p>
            ... shy? <br>
            That's okay. I'll go first.
        </p>
        <p>I'm Ben Wilson, but my friends call me Mister Ben.</p>
        <p>Professionally, I've been a data scientist, full-stack developer, and worn a multitude of other hats as a founder.</p>
        <p>Today, I'm focusing my energy into modeling and improving the efficacy of businesses -- both in delivering for their customers and hitting their growth goals.</p>
        <p>On a more personal note, I love games! Whether that game is tennis, cornhole, Mario Kart, Clue, or sports on the telly, I enjoy them all. Mix in friends, jams, and a grill, and I'm happier than ☀️ on a ☁️ day!</p>
        <p>
            Alright, your turn. <br>
            Get in touch.
        </p>
        <div class="flex justify-around sm:justify-between items-center sm:w-2/5">
            <a href="https://twitter.com/Mr_BenW" target="_blank" class="text-blue-grey-700 hover:text-blue-grey-500"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="https://www.linkedin.com/in/ben-wilson-21193650/" target="_blank" class="text-blue-grey-700 hover:text-blue-grey-500"><i class="fab fa-linkedin-in fa-lg"></i></a>
            <p target="_blank" class="text-blue-grey-700" aria-label="BWilson668 AT gmail DOT com" data-balloon-pos="up"><i class="fas fa-envelope fa-lg"></i></p>
            {{-- <a href="/coffee" class="text-blue-grey-700 hover:text-blue-grey-500"><i class="fas fa-mug fa-lg"></i></a> --}}
        </div>
        <p>
            Still too much too soon? That's 😎too. <br>
            Take a look around my site. I hope it helps!
        </p>
        <p>
            <a href="#articles" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Articles</a>
            dive into the details of business strategy and analytics.
        </p>
        <p>
            <a href="#units" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Units</a>
            set the foundation for conversation. If you get your team on the same page here, you can build incredible abilities on top of it.
        </p>
        <p>
            <a href="#models" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Models</a>
            is just another word for fancy calculator. Plug-in your own numbers to see what you are capable of.
        </p>
        {{-- <p>If you're crunched for time or want to keep up with the latest, sign up for my newsletter.</p> --}}
        {{-- ConvertKit sign-up form --}}
    </div>
    <div id="articles" class="my-24">
        <h2 class="text-2xl font-medium text-blue-grey-900 mb-4 font-sans">Articles</h2>
        <a href="/articles" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Check out all the articles &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>
    <div id="units" class="my-24">
        <h2 class="text-2xl font-medium text-blue-grey-900 mb-4 font-sans">Units</h2>
        <a href="/units" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Review all the units &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>
    <div id="models" class="my-24">
        <h2 class="text-2xl font-medium text-blue-grey-900 mb-4 font-sans">Models</h2>
        <a href="/models" class="text-blue-grey-700 hover:text-blue-grey-500 font-bold">Explore all the models &nbsp;<i class="fal fa-arrow-right fa-xs"></i></a>
    </div>
    {{-- <test></test> --}}
</div>
@endsection
