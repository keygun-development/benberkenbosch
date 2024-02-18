<x-app-layout>
    @section('pageTitle', '404')
    @section('content')
        <div class="flex flex-col h-full items-center justify-center mt-12">
            <h1 class="text-6xl font-bold text-gray-900 mb-2">404</h1>
            <p class="text-lg text-gray-700 mb-4 text-center">The requested page has not been found.</p>
            <a href="/" class="c-button c-button__black">Back to home</a>
        </div>
    @endsection
</x-app-layout>
