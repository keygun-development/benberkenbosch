@extends('layouts.dashboard')
@section('pageTitle', 'Album detail')
@section('content')
    <h1 class="text-3xl">
        Floating image new
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
        <form enctype="multipart/form-data" class="mt-4" method="POST" action="/dashboard/image/create">
            @csrf
            <div class="md:w-5/12">
                <p class="text-lg font-bold">
                    Floating Image:
                </p>
                <input class="mt-4" type="file" name="image" accept=".jpg,.jpeg,.png,.webp,.jfif"/>
            </div>
            <div class="mt-4">
                <input type="submit" class="c-button__black c-button cursor-pointer" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
