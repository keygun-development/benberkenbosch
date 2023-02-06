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
        <div class="container mx-auto px-4 my-8">
            <div class="flex justify-center w-full">
                <div class="flex flex-col md:flex-row md:justify-between md:w-10/12 w-full">
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
