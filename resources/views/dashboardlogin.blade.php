<x-app-layout>
    @section('pageTitle', 'Dashboard login')
    @section('content')
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center min-h-screen max-h-screen">
                <div class="rounded-lg bg-white p-8 shadow-lg md:w-6/12">
                    <h1 class="text-3xl text-center">
                        Login
                    </h1>
                    <form method="POST" action="/dashboard/login/send" class="mt-4 flex flex-col items-center w-full">
                        @csrf
                        <div class="w-full">
                            <p>
                                Email:
                            </p>
                            <input type="email" name="email" class="c-form__input w-full"/>
                        </div>
                        <div class="w-full">
                            <p class="mt-4">
                                Wachtwoord:
                            </p>
                            <input type="password" name="password" class="c-form__input w-full"/>
                        </div>
                        <div class="mt-4">
                            @if($errors->any())
                                <div class="text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="mt-4 w-full">
                            <input type="submit" class="c-button c-button__black cursor-pointer" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
