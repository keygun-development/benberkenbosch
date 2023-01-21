<div class="c-header">
    <div class="w-full flex justify-between">
        <div class="w-6/12">
            <a class="inline-block" href="{{ route('welcome') }}">
                <div class="flex items-center">
                    <img class="h-[80px] p-4" src="{{ asset('images/logo.png') }}"/>
                    <h2 class="font-allroundermonument text-2xl">
                        Ben Berkenbosch
                    </h2>
                </div>
            </a>
        </div>
        <div class="w-6/12 flex items-center justify-end uppercase">
            <x-navigation :class="'flex'"></x-navigation>
        </div>
    </div>
</div>
