@extends('layouts.dashboard')
@section('pageTitle', 'Album detail')
@section('content')
    <h1 class="text-3xl">
        Music new
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
        <form enctype="multipart/form-data" class="mt-4" method="POST" action="/dashboard/music/create">
            @csrf
            <div>
                <p class="text-lg font-bold">
                    Titel:
                </p>
                <input name="title" class="c-form__input" type="text" />
            </div>
            <div class="md:w-5/12 mt-4">
                <p class="text-lg font-bold mt-4">
                    Thumbnail:
                </p>
                <input class="mt-4" type="file" name="thumbnail" accept=".jpg,.jpeg,.png,.webp,.jfif"/>
            </div>
            <div class="mt-4">
                <p class="text-lg font-bold">
                    Link:
                </p>
                <input name="link" class="c-form__input" type="text" />
                <p class="text-gray-300 text-sm">
                    Waar moet de link naartoe verwijzen?
                </p>
            </div>
            <div class="mt-4">
                <input type="submit" class="c-button__black c-button cursor-pointer" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
