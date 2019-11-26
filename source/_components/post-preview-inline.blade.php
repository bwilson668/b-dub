<div class="p-4 md:w-1/2 flex-none">
    <div class="p-4 md:p-6 text-white md:min-h-full border-t-8 border-yellow-400 bg-bw-light-transparent">
        <h2 class="text-lg md:text-2xl font-bold text-blue-grey-900 mt-0">
            <a href="{{ $post->getUrl() }}" class="border-b-2 border-transparent hover:border-gray-100">{{ $post->title }}</a>
        </h2>
        <div class="leading-normal mt-2">
            <p class="text-gray-300">{{ $post->description }}</p>
        </div>
    </div>
</div>