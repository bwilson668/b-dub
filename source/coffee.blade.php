@extends('_layouts.master')

@section('body')
<header class="mb-4 md:mb-8">
    <div class="flex justify-between items-center md:items-end">
        <img src="https://assets.benjaminandrewwilson.com/bw-square.jpg" alt="Ben Wilson - That's me!" class="block h-10 md:h-24 lg:h-32 rounded-lg shadow-inner md:mr-4 lg:mr-8">
        <div class="md:flex-1">
            <a href="/" class="font-display text-2xl lg:text-4xl text-blue-900">Ben Wilson</a>
            <nav class="hidden md:flex">
                <a href="#articles" class="my-2 md:mb-0 md:mt-2 md:mr-4 uppercase text-blue-grey-500 hover:text-blue-grey-900">Articles</a>
                <a href="#units" class="my-2 md:mb-0 md:mt-2 md:mx-4 uppercase text-blue-grey-500 hover:text-blue-grey-900">Units</a>
                <a href="#models" class="my-2 md:mb-0 md:mt-2 md:mx-4 uppercase text-blue-grey-500 hover:text-blue-grey-900">Models</a>
            </nav>
        </div>
        
        <button class="md:hidden" @click="navDisplay = !navDisplay">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="! navDisplay"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg> 
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="navDisplay"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path></svg>
        </button>
    </div>

    <nav class="bg-blue-grey-100 rounded-lg shadow mt-2 px-6 py-4 flex flex-col md:hidden" v-show="navDisplay">
        <a href="#articles" class="my-2 uppercase text-blue-grey-500 hover:text-blue-grey-900">Articles</a>
        <a href="#units" class="my-2 uppercase text-blue-grey-500 hover:text-blue-grey-900">Units</a>
        <a href="#models" class="my-2 uppercase text-blue-grey-500 hover:text-blue-grey-900">Models</a>
    </nav>
</header>

<div class="md:ml-24 md:pl-4 lg:ml-32 lg:pl-8 lg:w-2/3 xl:w-2/5">
    <h1 class="text-2xl font-medium text-blue-grey-900 mb-4 font-sans">Tell me about yourself</h1>
    <div class="text-lg text-grey-800 leading-normal spaced-y-6">
        <p>
            ... shy? <br>
            That's okay. I'll go first.
        </p>
        <p>I'm Ben Wilson, but my friends call me Mister Ben.</p>
        <p>Professionally, I've been a data scientist, full-stack developer, and a multitude of other hats as a founder.</p>
        <p>Today, I'm focusing my creative energy into modeling and improving the efficacy of businesses -- both in delivering for their customers and their growth goals.</p>
        <p>Personally, </p>
        <p>Alright, your turn.</p>
        <p>
            If the socials are not your cup of joe, I understand. Instead, if you're in Tampa, for whatever reason, let's become <a href="/coffee">buddies over some brew</a>.
        </p>
        <p>Still too much too soon? That's 😎too. You can get to know me better on my newsletter. Just sign up below. I promise to keep it between just us.</p>
    </div>
    <test></test>
</div>

@endsection
