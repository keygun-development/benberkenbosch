<x-app-layout>
    @section('pageTitle', 'About')
    @section('content')
        <div class="container mx-auto px-4 mt-4 mb-8">
            <div class="flex flex-col items-center">
                <div class="md:w-8/12">
                    <h1 class="text-center font-allroundermonument text-3xl">
                        About me
                    </h1>
                    <x-about></x-about>
                </div>
            </div>
            <div class="flex items-center flex-col mt-4">
                <h2 class="text-center font-allroundermonument text-3xl">
                    Listen to my music
                </h2>
                <x-spotify-embed></x-spotify-embed>
            </div>
        </div>
    @endsection
</x-app-layout>
