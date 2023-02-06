@extends('layouts.dashboard')
@section('pageTitle', 'About me')
@section('content')
    <h1 class="text-3xl">
        About
    </h1>
    <div class="mt-4">
        <form class="mt-4" method="POST" action="/dashboard/about/save">
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
