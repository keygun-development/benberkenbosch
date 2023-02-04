@extends('layouts.dashboard')
@section('pageTitle', 'Album detail')
@section('content')
    <h1 class="text-3xl">
        Music detail
    </h1>
    <div class="mt-4 overflow-x-auto">
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
        <form enctype="multipart/form-data" class="mt-4" method="POST" action="/dashboard/music/save">
            @csrf
            <input type="hidden" value="{{ $music->id }}" name="id"/>
            <div class="md:w-5/12">
                <p class="text-lg font-bold">
                    Music embed:
                </p>
                {!! $music->embed !!}
                <p class="text-lg font-bold mt-4">
                    Iframe:
                </p>
                <input class="c-form__input" type="text" name="embed" value="{{ $music->embed }}" />
            </div>
            <div class="mt-4">
                <p class="text-lg font-bold">
                    Titel:
                </p>
                <input name="title" class="c-form__input" type="text" value="{{ $music->title }}" />
            </div>
            <div class="mt-4">
                <input type="submit" class="c-button__black c-button cursor-pointer" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
