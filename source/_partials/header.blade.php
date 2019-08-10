<header class="mb-8 md:mb-16">
    <div class="flex justify-between items-center md:items-end">
        <img src="https://assets.benjaminandrewwilson.com/bw-square.jpg" alt="Ben Wilson - That's me!" class="block h-10 md:h-24 lg:h-32 rounded-lg shadow-inner md:mr-4 lg:mr-8">
        <div class="md:flex-1">
            <a href="/" class="font-display text-2xl lg:text-4xl text-blue-900">Ben Wilson</a>
            <nav class="hidden md:flex">
                    @include('_nav.menu')
            </nav>
        </div>
        
        <button class="md:hidden" @click="navDisplay = !navDisplay">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="! navDisplay"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg> 
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="block text-blue-grey-600 h-6 w-6" v-show="navDisplay"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path></svg>
        </button>
    </div>

    <nav class="bg-blue-grey-100 rounded-lg shadow mt-2 px-6 py-4 flex flex-col md:hidden" v-show="navDisplay">
        @include('_nav.menu')
    </nav>
</header>