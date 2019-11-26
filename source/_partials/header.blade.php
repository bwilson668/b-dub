<header class="fixed top-0 h-16 w-full z-10 bg-bw-dark-transparent blurable">
    <nav id="nav" class="container mx-auto my-4">
        <div class="flex justify-between items-center">
            {{-- <img src="https://assets.benjaminandrewwilson.com/bw-square.jpg" alt="Ben Wilson - That's me!" class="block h-10 md:h-24 lg:h-32 rounded-lg shadow-inner md:mr-4 lg:mr-8"> --}}
            <a href="/" class="font-display tracking-widest text-2xl lg:text-4xl">Ben Wilson</a>
            <div class="hidden md:flex">
                @include('_nav.menu')
            </div>
            
            <button class="md:hidden" @click="navDisplay = !navDisplay">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="! navDisplay"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg> 
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="navDisplay"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path></svg>
            </button>
        </div>
    
        <div class="flex flex-col h-screen md:hidden" v-show="navDisplay">
            @include('_nav.menu')
        </div>
    </nav>

</header>