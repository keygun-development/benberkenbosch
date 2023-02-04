<x-app-layout>
    @section('pageTitle', 'About')
    @section('content')
        <div class="container mx-auto px-4 mt-4 mb-8">
            <div class="flex flex-col items-center">
                <div class="md:w-8/12">
                    <h1 class="text-center font-allroundermonument text-3xl">
                        About me
                    </h1>
                    <p class="mt-8">
                        Ben Berkenbosch is a composer and pianist, born in The Netherlands. He dedicates his life to create music that evokes strong emotions. At 12-years old he started playing piano, ever since then Ben quickly started bringing his own interpretations of music and emotions to life. Ben’s music is a unique mix of epic orchestral and emotional music, with a strong neoclassical influence.
                    </p>
                    <p class="mt-4">
                        You can find Ben’s music can on many big YouTube channels, like Epic Music World, Pandora Journey, ThePrimeCronus, My Soul Your Beats, and many more. His music has also been featured on many big Spotify playlists, including the official Spotify playlist: “Calm”.
                    </p>
                    <p class="mt-4">
                        Ben released his first song in the summer of 2021, ever since then he has been releasing new music every month. At the start of 2022 Ben’s debut album: “Frozen In Time” came out. Frozen in time is a collection of epic, emotional, and ambient music with piano in the center of it all. At the start of 2023, Ben Berkenbosch and Lorenzo Ferrara released a special 3-part EP: “At The End Of The World” on Epic Music World.
                    </p>
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
