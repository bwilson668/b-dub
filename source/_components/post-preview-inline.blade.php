<div class="flex items-start my-8">
    @if ($post->cover != NULL)
        <img src="https://assets.benjaminandrewwilson.com/closed.jpg" alt="" class="-mr-4 h-16 md:h-32 rounded-lg shadow-xl z-10">
    @endif

    <div class="mt-4 px-8 py-4 w-full rounded-lg bg-blue-grey-100 border-t-8 border-yellow-400 shadow">
        <h2 class="text-lg md:text-2xl font-bold text-blue-grey-900 mt-0">
            <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
        </h2>
        <p class="text-xs text-grey-600 mb-4">{{ $post->getDate()->format('F j, Y') }}</p>
        <div class="text-grey-800 leading-normal spaced-y-6">
            <p>{{ $post->description }}</p>
        </div>
        <a 
            href="{{ $post->getUrl() }}"
            class="text-blue-grey-700 hover:text-blue-grey-500 font-bold"
        >
            Dig in &nbsp;<i class="fal fa-arrow-right fa-xs"></i>
        </a>
    </div>
    
</div>