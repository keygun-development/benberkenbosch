<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ben Berkenbosch Music - Music To Carry Our Emotions" />
    <meta name="keywords" content="Ben Berkenbosch, Music Composer, Music, Composer, Ben, Berkenbosch" />
    <meta property="og:image" content="{{ asset('images/BBLogo.svg') }}">
    @vite(['resources/css/links.scss'])
    <title>Ben Berkenbosch</title>
</head>
<body style="background-color: #111" class="bg-[url({{ asset('images/bg.webp') }})] flex flex-col gap-y-2 lg:gap-y-8 justify-between h-screen bg-bottom bg-no-repeat bg-cover bg-fixed text-gray-100 tracking-wide leading-7 p-4">
<div class="mt-4 lg:mt-24 p-0 lg:p-4 text-center mx-auto">
    <a href="https://benberkenbosch.com" target="_blank">
        <div class="group">
            <div class="relative rounded-full inline-flex">
                <div
                    class="absolute rounded-full transition-all duration-1000 opacity-0 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-lg group-hover:-inset-1 group-hover:opacity-100 group-hover:duration-500">
                </div>
                <img src="{{ asset('images/BBLogo.svg') }}" alt="Ben Berkenbosch" class="w-24 h-24 rounded-full relative transition-all duration-200 focus:outline-none" />
            </div>
            <h1 class="duration-500 mt-4 text-xl font-bold text-gray-300 group-hover:text-white">Ben Berkenbosch</h1>
            <p class="duration-500 text-gray-400 group-hover:text-white">Music To Carry Our Emotions</p>
        </div>
    </a>
</div>
<div class="flex-1 mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 pb-4 md:gap-8 justify-center mt-14">
    <a href="https://www.youtube.com/c/BenBerkenboschMusic/featured" target="_blank" class="link-button bg-[#FF0000] hover:shadow-[0_10px_20px_rgba(255,0,0,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
            <span>YouTube</span>
        </div>
    </a>
    <a href="https://open.spotify.com/intl-de/artist/052Q9RnerwsOF5MDRHiSwk" target="_blank" class="link-button bg-[#1DB954] hover:shadow-[0_10px_20px_rgba(29,185,84,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/></svg>
            <span>Spotify</span>
        </div>
    </a>
    <a href="https://music.apple.com/sg/artist/ben-berkenbosch/1578080607" target="_blank" class="link-button bg-[#b166cc] hover:shadow-[0_10px_20px_rgba(177,102,204,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
            <span>Apple Music</span>
        </div>
    </a>
    <a href="https://www.instagram.com/ben_berkenbosch/" target="_blank" class="link-button bg-[#df306b] hover:shadow-[0_10px_20px_rgba(223,48,107,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
            <span>Instagram</span>
        </div>
    </a>
    <a href="https://www.amazon.com/s?k=Ben+Berkenbosch&i=digital-music&search-type=ss&ref=ntt_srch_drd_B09B4Z7BPD" target="_blank" class="link-button bg-[#00a8e1] hover:shadow-[0_10px_20px_rgba(0,168,225,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"/></svg>
            <span>Amazon Music</span>
        </div>
    </a>
    <a href="https://www.deezer.com/us/artist/140278322" target="_blank" class="link-button bg-[#a238ff] hover:shadow-[0_10px_20px_rgba(162,56,255,_0.5)]">
        <div>
            <svg class="w-6 h-6" viewBox="0 0 279 279" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M232.97 42.8737C235.539 27.9837 239.309 18.6204 243.485 18.6026H243.493C251.28 18.6294 257.592 51.1012 257.592 91.1924C257.592 131.284 251.271 163.782 243.476 163.782C240.28 163.782 237.331 158.264 234.957 149.017C231.205 182.867 223.419 206.136 214.405 206.136C207.431 206.136 201.172 192.158 196.97 170.114C194.101 212.038 186.88 241.783 178.44 241.783C173.143 241.783 168.314 229.996 164.739 210.804C160.44 250.421 150.508 278.18 138.926 278.18C127.344 278.18 117.394 250.43 113.113 210.804C109.564 229.996 104.735 241.783 99.4118 241.783C90.9722 241.783 83.7686 212.038 80.8818 170.114C76.6797 192.158 70.4383 206.136 63.4465 206.136C54.442 206.136 46.6469 182.875 42.895 149.017C40.5379 158.291 37.5717 163.782 34.376 163.782C26.5809 163.782 20.26 131.284 20.26 91.1924C20.26 51.1012 26.5809 18.6026 34.376 18.6026C38.5604 18.6026 42.3035 27.9926 44.8989 42.8737C49.0569 17.1985 55.8103 0.510986 63.4465 0.510986C72.5129 0.510986 80.3698 24.1114 84.0864 58.3808C87.7235 33.4389 93.241 17.5383 99.4206 17.5383C108.081 17.5383 115.443 48.8118 118.171 92.4355C123.3 70.0692 130.725 56.0377 138.944 56.0377C147.162 56.0377 154.587 70.0781 159.707 92.4355C162.444 48.8118 169.797 17.5383 178.458 17.5383C184.628 17.5383 190.137 33.4389 193.792 58.3808C197.5 24.1114 205.357 0.510986 214.423 0.510986C222.033 0.510986 228.812 17.2075 232.97 42.8737ZM0.0891113 84.0528C0.0891113 66.1311 3.67328 51.5989 8.0961 51.5989C12.5189 51.5989 16.1031 66.1311 16.1031 84.0528C16.1031 101.974 12.5189 116.507 8.0961 116.507C3.67328 116.507 0.0891113 101.974 0.0891113 84.0528ZM261.743 84.0528C261.743 66.1311 265.327 51.5989 269.75 51.5989C274.172 51.5989 277.757 66.1311 277.757 84.0528C277.757 101.974 274.172 116.507 269.75 116.507C265.327 116.507 261.743 101.974 261.743 84.0528Z" />
            </svg>
            <span>Deezer</span>
        </div>
    </a>
    <a href="https://tidal.com/browse/artist/28385955" target="_blank" class="link-button bg-[#222222] hover:shadow-[0_10px_20px_rgba(120,120,120,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7">
                <path style="fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0-4.729-4.73L-9.459 0l4.73 4.728Z" transform="matrix(.35278 0 0 -.35278 6.93839742 1.93272959)"/>
                <path style="fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0-4.729-4.73L-9.459 0l4.73 4.73Z" transform="matrix(.35278 0 0 -.35278 6.93839742 5.26979959)"/>
                <path style="fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0-4.73-4.73L-9.459 0l4.729 4.729Z" transform="matrix(.35278 0 0 -.35278 3.60150942 1.93286959)"/>
                <path style="fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0-4.729-4.73L-9.459 0l4.73 4.729Z" transform="matrix(.35278 0 0 -.35278 10.27511042 1.93286959)"/>
            </svg>
            <span class="font-bold">T I D A L</span>
        </div>
    </a>
    <a href="https://discord.com/invite/hNyuw78YT3" target="_blank" class="link-button bg-[#5865f2] hover:shadow-[0_10px_20px_rgba(88,101,242,_0.5)]">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>
            <span>Discord</span>
        </div>
    </a>
</div>
</body>
</html>
