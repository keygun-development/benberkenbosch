@extends('layouts.dashboard')
@section('pageTitle', 'Dashboard')
@section('content')
    <h1 class="text-3xl">
        Dashboard
    </h1>
    <div class="mt-4">
        <a class="text-gray-400 hover:underline" href="/">
            <i class="fa-solid fa-arrow-left mr-2"></i>
            Terug naar home
        </a>
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
        <form class="mt-4" method="POST" action="/dashboard/save">
            @csrf
            <input type="hidden" value="{{ $about->id }}" name="id" />
            <div>
                <h2 class="text-lg font-bold">
                    Titel:
                </h2>
                <input class="c-form__input" type="text" value="{{ $about->title }}" name="title"/>
            </div>
            <div class="mt-4">
                <h2 class="text-lg font-bold">
                    Content:
                </h2>
                <editor :text="{{ json_encode($about->text) }}"></editor>
            </div>
            <div class="mt-4">
                <input class="c-button c-button__black cursor-pointer" type="submit" value="Opslaan" />
            </div>
        </form>
    </div>
@endsection
