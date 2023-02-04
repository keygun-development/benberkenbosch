<x-app-layout>
    @section('pageTitle', 'Music')
    @section('content')
        <div class="container mx-auto px-4 mt-4 mb-8">
            <h1 class="text-center font-allroundermonument text-3xl">
                My Music
            </h1>
            <div class="flex w-full items-center flex-col">
                @foreach($musics as $music)
                    <iframe-loader
                        :title="'{{ $music->title }}'"
                        ref="iframe{{ $music->id }}"
                    >
                        <template #loader>
                            <div class="mt-8 flex flex-col items-center w-full">
                                <div
                                    @click="$refs['iframe{{ $music->id }}'].loadIframe('{{ $music->embed }}')"
                                    class="bg-white w-12 h-12 flex justify-center items-center rounded-full shadow-lg cursor-pointer">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                                <p class="text-center mt-2">
                                    {{ $music->title }}
                                </p>
                            </div>
                        </template>
                    </iframe-loader>
                @endforeach
            </div>
        </div>
    @endsection
</x-app-layout>
<script>
    import IframeLoader from "../js/components/IframeLoader";

    export default {
        components: {IframeLoader}
    }
</script>
