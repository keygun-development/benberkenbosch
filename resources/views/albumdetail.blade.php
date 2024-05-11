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
                            @foreach($album->albumMetas as $albummeta)
                                <a href="{{ $albummeta->link }}"
                                   class="text-white duration-100">
                                    <i class="fa-brands fa-{{ $albummeta->icon }} text-3xl"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endslot
            </x-header-cta>
        </div>
    @endsection
    @section('content')
        <div class="container mx-auto px-4 mb-8">
            @if($album->embed_link)
                <div class="flex justify-center mb-12">
                    <iframe allow="autoplay ; encrypted-media; fullscreen *; clipboard-write" frameborder="0"
                            height="450" style="width:100%;max-width:660px;overflow:hidden;border-radius:10px;"
                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation"
                            src="{{ $album->embed_link }}"></iframe>
                </div>
            @endif
            <div class="flex justify-center w-full">
                <div class="flex flex-col md:flex-row md:justify-between md:w-10/12 w-full">
                    <div class="md:w-5/12 w-full">
                        <img src="{{ asset($album->cover) }}"/>
                        @if($album->cover_art)
                            <p class="text-gray-400">
                                Cover art by: {{ $album->cover_art }}
                            </p>
                        @endif
                    </div>
                    <div class="md:w-6/12 mt-4 md:mt-0">
                        <h2 class="text-center font-asap text-4xl">
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
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "MusicAlbum",
    "name": "{{ $album->name }}",
    "byArtist": "Ben Berkenbosch",
    "image": "{{ asset($album->cover) }}",
    "datePublished": "{{ $album->publish_date }}",
    "description": "{!! $album->description !!}",
    "numTracks": "{{ $album->musics()->count() }}",
    "track": [
    @foreach($album->musics()->get() as $song)
        {
            "@type": "MusicRecording",
            "byArtist": "Ben Berkenbosch",
            "name": "{{ $song->title }}",
            "url": "{{ $song->link }}",
            "inAlbum": "{{ $album->name }}"
        },
    @endforeach
    ]
}
</script>
