<x-app-layout>
    @section('pageTitle', $album->name)
    @section('cta')
        <div class="min-h-screen max-h-screen">
            <x-header-cta
                :album="$album"
            >
                @slot('date')
                    {{ $album->publish_date }}
                @endslot
                @slot('platforms')
                    <div class="flex justify-center w-full mt-8">
                        <div class="md:w-8/12 w-full flex justify-between">
                            <a href="https://www.youtube.com/@BenBerkenboschMusic"
                               class="text-white hover:text-red-500 duration-100">
                                <i class="fa-brands fa-youtube text-3xl"></i>
                            </a>
                            <a href="https://open.spotify.com/artist/052Q9RnerwsOF5MDRHiSwk?si=v6oBKLCySCeFA23Mn5F-PA&nd=1"
                               class="text-white hover:text-green-500 duration-100">
                                <i class="fa-brands fa-spotify text-3xl"></i>
                            </a>
                            <a href="https://music.amazon.com/artists/B09B4Z7BPD"
                               class="text-white hover:text-orange-500 duration-100">
                                <i class="fa-brands fa-amazon text-3xl"></i>
                            </a>
                        </div>
                    </div>
                @endslot
            </x-header-cta>
        </div>
    @endsection
    @section('content')
        <div class="container mx-auto px-4 my-8">
            <div class="flex justify-center w-full">
                <div class="flex flex-col md:flex-row md:justify-between items-center md:w-10/12 w-full">
                    <div class="md:w-5/12 w-full">
                        <img src="{{ asset($album->cover) }}"/>
                    </div>
                    <div class="md:w-6/12 mt-4 md:mt-0">
                        <h2 class="text-center font-allroundermonument text-4xl">
                            {{ $album->name }}
                        </h2>
                        <div class="mt-4">
                            {!! $album->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
