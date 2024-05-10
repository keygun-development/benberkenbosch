<x-app-layout>
    @section('pageTitle', 'Music')
    @section('content')
        <div class="container mx-auto px-4 mt-4 mb-8">
            <h1 class="text-center font-asap text-3xl">
                My Music
            </h1>
        </div>
        <div class="w-full grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 xs:grid-cols-2">
            @foreach($musics as $music)
                <a href="/" target="_blank" class="group relative aspect-square overflow-hidden">
                    <img class="object-cover w-full h-full object-center duration-300 group-hover:scale-105"
                         alt="{{ $music->title }} afbeelding"
                         src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/640px-Google_Images_2015_logo.svg.png"/>
                    <div class="absolute inset-0 hover:bg-[rgba(0,0,0,0.6)] duration-300">
                        <div class="absolute inset-0 w-full h-full hidden group-hover:flex items-center justify-center">
                            <div class="text-center text-white">
                                <p class="text-2xl uppercase">
                                    {{ $music->title }}
                                </p>
                                <p class="text-xl">
                                    Ben Berkenbosch
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endsection
</x-app-layout>
