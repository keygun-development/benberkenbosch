<div class="relative">
    <img
        class="max-h-[calc(100vh-80px)] min-h-[calc(100vh-80px)] object-cover object-bottom aspect-video w-full absolute inset-0
        {{ \Carbon\Carbon::now()->format('Y-m-d') < $album->publish_date ? 'grayscale' : '' }}"
        src="{{ asset($album->thumbnail) }}" alt="{{ asset($album->thumbnail) }}"/>
    <div class="absolute flex flex-col justify-center items-center w-full h-[calc(100vh-80px)]">
        <div class="text-white font-asap text-center">
            <h2 class="lg:text-2xl md:text-xl text-lg">
                {{ $album->author }}
            </h2>
            <h1 class="lg:text-9xl md:text-7xl text-4xl !leading-relaxed">
                {{ $album->name }}
            </h1>
            <h3 class="lg:text-2xl md:text-xl text-lg">
                {{ $date }}
            </h3>
            {{ $platforms }}
        </div>
        <a href="#app" class="absolute bottom-0 c-arrow__down">
            <i class="fa-solid fa-chevron-down text-white opacity-30 text-3xl"></i>
        </a>
        @if($album->artwork)
            <p class="absolute bottom-0 right-0 text-gray-400 text-xs md:text-lg">
                Artwork by: {{ $album->artwork }}
            </p>
        @endif
    </div>
</div>
