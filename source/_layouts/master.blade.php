<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />
        
        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            {{-- Insert analytics code here --}}
        @endif
        
        <link rel="stylesheet" href="https://use.typekit.net/xkv3llo.css">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="https://kit.fontawesome.com/7074b97e46.js"></script>
    </head>
    <body class="bg-blue-grey-050 border-t-8 border-blue-900 py-8 lg:py-16 px-6 md:px-16 lg:px-24">
        <div id="container">
            @include('_partials.header')
    
            <main>@yield('body')</main>    
        </div>

        <footer class="mt-24 md:ml-28 lg:ml-40 lg:w-2/3 xl:w-2/5 text-blue-grey-400 font-sm">
            <p>&copy; {{ Date('Y') }}, Mr. Ben</p>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
