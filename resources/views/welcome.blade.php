<x-app-layout>
    @section('pageTitle', 'Home')
    @section('cta')
        <x-header-cta></x-header-cta>
    @endsection
    @section('content')
        <div class="container mx-auto px-4 mt-8">
            <div class="flex flex-col">
                <div class="w-full flex min-h-full">
                    <div class="w-4/12 relative max-h-[35rem] min-h-[35rem]">
                        <x-hovering-image :class="'top-0 right-0 z-10'"
                                          src="{{ asset('images/ABW.jpg') }}"></x-hovering-image>
                        <x-hovering-image :class="'top-40 left-10'"
                                          src="{{ asset('images/ATEOTW.jpeg') }}"></x-hovering-image>
                    </div>
                    <div class="w-4/12 mt-60">
                        <h2 class="font-allroundermonument text-3xl text-center">
                            Ben Berkenbosch
                        </h2>
                        <p class="mt-8 text-left">
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem
                        </p>
                        <p class="mt-4 text-left">
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem
                        </p>
                        <p class="mt-4 text-left">
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                            Lorem
                        </p>
                    </div>
                    <div class="w-4/12 relative max-h-[35rem] min-h-[35rem]">
                        <x-hovering-image :class="'top-10 left-0'"
                                          src="{{ asset('images/WCHHIA.png') }}"></x-hovering-image>
                        <x-hovering-image :class="'top-60 right-10 z-10'"
                                          src="{{ asset('images/HM.png') }}"></x-hovering-image>
                    </div>
                </div>
                <div class="flex justify-between w-full min-h-full">
                    <div class="w-4/12 relative max-h-[35rem] min-h-[35rem]">
                        <x-hovering-image :class="'shrink-0 top-10 left-20 !w-10/12'"
                                          src="{{ asset('images/TO.jpg') }}"></x-hovering-image>
                        <x-hovering-image :class="'shrink-0 top-80 right-[-200px] z-10'"
                                          src="{{ asset('images/CN.jpg') }}"></x-hovering-image>
                    </div>
                    <div class="w-4/12 relative max-h-[35rem] min-h-[35rem]">
                        <x-hovering-image :class="'shrink-0 top-0 left-[-100px] z-10'"
                                          src="{{ asset('images/FIT.jpg') }}"></x-hovering-image>
                        <x-hovering-image :class="'top-20 right-0 !w-10/12'"
                                          src="{{ asset('images/L.jpg') }}"></x-hovering-image>
                    </div>
                </div>
            </div>
            <div class="mt-16 flex flex-col items-center">
                <h2 class="text-3xl font-allroundermonument">
                    Listen
                </h2>
                <iframe class="mt-4 w-10/12" style="border-radius:12px" src="https://open.spotify.com/embed/artist/052Q9RnerwsOF5MDRHiSwk?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
    @endsection
</x-app-layout>
