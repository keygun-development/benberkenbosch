@extends('layouts.dashboard')
@section('pageTitle', 'Album detail')
@section('content')
    <h1 class="text-3xl">
        Floating image detail
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
        <form enctype="multipart/form-data" class="mt-4" method="POST" action="/dashboard/image/save">
            @csrf
            <input type="hidden" value="{{ $image->id }}" name="id"/>
            <div class="md:w-5/12">
                <p class="text-lg font-bold">
                    Floating Image:
                </p>
                <img
                    class="max-h-[300px] max-w-[300px] min-h-[300px] min-w-[300px] aspect-square object-cover rounded-lg"
                    src="{{ asset($image->image) }}"
                    alt="Thumbnail"/>
                <input class="mt-4" type="file" name="image" accept=".jpg,.jpeg,.png,.webp,.jfif"/>
            </div>
            <div class="mt-4">
                <p class="text-lg font-bold">
                    Positie:
                </p>
                <input name="position" class="c-form__input" type="number" value="{{ $image->position }}" max="8" min="1" />
            </div>
            <div class="mt-4">
                <input type="submit" class="c-button__black c-button cursor-pointer" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
