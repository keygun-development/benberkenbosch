<x-app-layout>
    @section('pageTitle', 'Music')
    @section('content')
        <div class="container mx-auto px-4 mt-4 mb-8">
            <h1 class="text-center font-allroundermonument text-3xl">
                My Music
            </h1>
            <div class="flex w-full items-center flex-col">
                @foreach($musics as $music)
                    <div class="mt-8 flex flex-col items-center w-full">
                        <div class="c-youtube md:w-6/12 w-full">
                            {!! $music->embed !!}
                        </div>
                        <p class="text-center mt-2">
                            {{ $music->title }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</x-app-layout>
