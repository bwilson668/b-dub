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
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
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
    <body class="font-sans text-white text-lg h-full bg-bw-dark flex flex-col">
        <div id="container">
            @include('_partials.header')
            <main class="container pt-32 mx-auto relative">
                @yield('body')
            </main>    
        </div>

        <span class="flex-1"></span>

        <footer class="w-full pb-8 pt-64 mt-16 mx-auto text-center text-sm sunset">
            <p class="text-bw-dark">&copy; {{ Date('Y') }}, Mister Ben</p>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
