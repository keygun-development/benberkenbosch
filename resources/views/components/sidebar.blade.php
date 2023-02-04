<div class="bg-[#021d26] rounded-b-xl md:rounded-r-xl md:min-h-screen py-4 md:py-12">
    <div class="xl:w-10/12 w-11/12 mx-auto">
        <div class="flex flex-row justify-between md:flex-col items-center lg:items-start md:space-y-8">
            <a class="duration-300 hover:text-white text-lg font-semibold flex items-center
            {{ request()->routeIs('dashboard.home') ? 'text-white' : 'text-gray-400'}}"
               href="/dashboard">
                <i class="fa-solid fa-house mr-2"></i>
                <p class="hidden lg:block">
                    Dashboard
                </p>
            </a>
            <a class="duration-300 hover:text-white text-lg font-semibold flex items-center
            {{ request()->routeIs('dashboard.albums') ? 'text-white' : 'text-gray-400'}}"
               href="/dashboard/albums">
                <i class="fa-solid fa-compact-disc mr-2"></i>
                <p class="hidden lg:block">
                    Albums
                </p>
            </a>
            <a class="duration-300 hover:text-white text-lg font-semibold flex items-center
            {{ request()->routeIs('dashboard.images') ? 'text-white' : 'text-gray-400'}}"
               href="/dashboard/images">
                <i class="fa-solid fa-image mr-2"></i>
                <p class="hidden lg:block">
                    Floating images
                </p>
            </a>
            <a class="duration-300 hover:text-white text-lg font-semibold flex items-center
            {{ request()->routeIs('dashboard.music') ? 'text-white' : 'text-gray-400'}}"
               href="/dashboard/music">
                <i class="fa-brands fa-itunes-note mr-2"></i>
                <p class="hidden lg:block">
                    Music
                </p>
            </a>
            <a class="duration-300 hover:text-white text-lg font-semibold flex items-center
            {{ request()->routeIs('dashboard.about') ? 'text-white' : 'text-gray-400'}}"
               href="/dashboard/about">
                <i class="fa-solid fa-user mr-2"></i>
                <p class="hidden lg:block">
                    About me
                </p>
            </a>
        </div>
    </div>
</div>
