<x-app-layout>
    @section('pageTitle', 'Home')
    @section('cta')
        <div class="min-h-[calc(100vh-80px)] max-h-[calc(100vh-80px)]">
            <x-header-cta
                :album="$album"
            >
                @slot('date')
                    {{ \Carbon\Carbon::now()->format('d-m-Y') < $album->publish_date ? 'Coming soon' : 'Out now' }}
                @endslot
                @slot('platforms')
                    <div class="mt-8">
                        <a class="c-button c-button__white c-button__large md:text-2xl text-lg tracking-wider">
                            Listen Now!
                        </a>
                    </div>
                @endslot
            </x-header-cta>
        </div>
    @endsection
    @section('content')
        <div class="container mx-auto px-4 mt-8">
            <div class="flex flex-col">
                <div
                    class="w-full flex flex-col sm:flex-row justify-between sm:min-h-[20rem] xs:min-h-[50rem] min-h-[40rem]">
                    <div class="relative w-full sm:w-6/12 xl:w-4/12 flex justify-center sm:block">
                        <x-hovering-image :class="'shrink-0 right-10 sm:right-0 sm:left-20 md:left-40 top-0 z-10'"
                                          src="{{ asset('images/ABW.jpg') }}"></x-hovering-image>
                        <x-hovering-image :class="'shrink-0 left-10 sm:left-0 top-20 md:top-40 xl:left-10'"
                                          src="{{ asset('images/ATEOTW.jpeg') }}"></x-hovering-image>
                    </div>
                    <div class="relative w-full sm:w-6/12 xl:w-4/12">
                        <x-hovering-image :class="'shrink-0 bottom-40 sm:top-10 xs:left-20 sm:left-0'"
                                          src="{{ asset('images/WCHHIA.png') }}"></x-hovering-image>
                        <x-hovering-image :class="'shrink-0 bottom-20 sm:top-40 right-10 z-10'"
                                          src="{{ asset('images/HM.png') }}"></x-hovering-image>
                    </div>
                </div>
                <div class="w-full flex justify-center relative md:my-8">
                    <div class="lg:w-4/12">
                        <h2 class="font-allroundermonument text-3xl text-center">
                            Ben Berkenbosch
                        </h2>
                        <x-about></x-about>
                    </div>
                </div>
                <div
                    class="w-full flex flex-col sm:flex-row justify-between sm:min-h-[20rem] xs:min-h-[50rem] lg:min-h-[40rem] min-h-[40rem]">
                    <div class="relative w-full sm:w-6/12 xl:w-4/12 flex justify-center sm:block">
                        <x-hovering-image :class="'shrink-0 sm:top-20 lg:top-10 left-10 sm:left-0 lg:!w-10/12'"
                                          src="{{ asset('images/TO.jpg') }}"></x-hovering-image>
                        <x-hovering-image
                            :class="'shrink-0 top-20 xs:top-40 right-10 sm:right-0 sm:top-40 sm:left-20 md:top-40 md:left-40 lg:top-80 lg:left-80 z-10'"
                            src="{{ asset('images/CN.jpg') }}"></x-hovering-image>
                    </div>
                    <div class="relative w-full sm:w-6/12 xl:w-4/12 flex justify-center sm:block">
                        <x-hovering-image
                            :class="'shrink-0 lg:right-60 md:right-40 sm:right-20 sm:top-20 lg:top-0 bottom-20 xs:right-40 right-20 z-10'"
                            src="{{ asset('images/FIT.jpg') }}"></x-hovering-image>
                        <x-hovering-image :class="'sm:top-40 lg:top-20 xs:right-0 right-10 bottom-0 lg:!w-10/12'"
                                          src="{{ asset('images/L.jpg') }}"></x-hovering-image>
                    </div>
                </div>
            </div>
            <div class="mt-16 flex flex-col items-center">
                <h2 class="text-3xl font-allroundermonument">
                    Listen
                </h2>
                <x-spotify-embed></x-spotify-embed>
            </div>
            <div class="mt-8 flex flex-col items-center">
                <x-contact></x-contact>
            </div>
            <div class="my-8 flex flex-col items-center">
                <h2 class="text-3xl font-allroundermonument">
                    Buy my music
                </h2>
                <div class="flex mt-4">
                    <a href="https://music.amazon.com/artists/B09B4Z7BPD"
                       class="text-black hover:text-orange-500 duration-100">
                        <i class="fa-brands fa-amazon fa-3x"></i>
                    </a>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
