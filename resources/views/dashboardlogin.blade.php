<x-app-layout>
    @section('pageTitle', 'Dashboard login')
    @section('content')
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center min-h-screen max-h-screen">
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <h1 class="text-3xl text-center">
                        Login
                    </h1>
                    <form class="mt-4">
                        <div>
                            <p>
                                Email:
                            </p>
                            <input type="email" name="email" class="c-form__input"/>
                        </div>
                        <div>
                            <p class="mt-4">
                                Wachtwoord:
                            </p>
                            <input type="password" name="password" class="c-form__input"/>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <input type="submit" class="c-button c-button__black cursor-pointer" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
