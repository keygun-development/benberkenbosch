@extends('layouts.dashboard')
@section('pageTitle', 'Album detail')
@section('content')
    <h1 class="text-3xl">
        Album detail
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
        <form enctype="multipart/form-data" class="mt-4" method="POST" action="/dashboard/album/save">
            @csrf
            <input type="hidden" value="{{ $album->id }}" name="id"/>
            <div class="flex flex-col md:flex-row w-full justify-between">
                <div class="md:w-5/12">
                    <p class="text-lg font-bold">
                        Thumbnail:
                    </p>
                    <img
                        class="min-h-[300px] min-w-[300px] max-h-[300px] max-w-[500px] aspect-video object-cover rounded-lg"
                        src="{{ asset($album->thumbnail) }}"
                        alt="Thumbnail"/>
                    <input class="mt-4" type="file" name="thumbnail" accept=".jpg,.jpeg,.png,.webp,.jfif"/>
                </div>
                <div class="md:w-5/12">
                    <p class="text-lg font-bold">
                        Cover:
                    </p>
                    <img
                        class="max-h-[300px] max-w-[300px] min-h-[300px] min-w-[300px] aspect-square object-cover rounded-lg"
                        src="{{ asset($album->cover) }}" alt="Cover"/>
                    <input class="mt-4" type="file" name="cover" accept=".jpg,.jpeg,.png,.webp,.jfif"/>
                </div>
            </div>
            <div class="mt-4 flex flex-col lg:flex-row gap-4">
                <div>
                    <p class="text-lg font-bold">
                        Naam:
                    </p>
                    <input type="text" name="name" value="{{ $album->name }}" class="c-form__input"/>
                </div>
                <div>
                    <p class="text-lg font-bold">
                        Auteur:
                    </p>
                    <input type="text" name="author" value="{{ $album->author }}" class="c-form__input"/>
                </div>
                <div>
                    <p class="text-lg font-bold">
                        Release Datum:
                    </p>
                    <input type="date" name="date" value="{{ $album->publish_date }}" class="c-form__input"/>
                </div>
                <div>
                    <p class="text-lg font-bold">
                        Thumbnail artwork:
                    </p>
                    <input type="text" name="thumbnail_art" value="{{ $album->artwork }}" class="c-form__input"/>
                </div>
                <div>
                    <p class="text-lg font-bold">
                        Cover art:
                    </p>
                    <input type="text" name="cover_art" value="{{ $album->cover_art }}" class="c-form__input"/>
                </div>
            </div>
            <div class="mt-4 flex flex-col lg:flex-row gap-4">
                <div>
                    <p class="text-lg font-bold">
                        Button text:
                    </p>
                    <input type="text" name="buttontext" class="c-form__input" value="{{ $album->buttontext }}" />
                </div>
                <div>
                    <p class="text-lg font-bold">
                        Button (full)link:
                    </p>
                    <input type="text" name="buttonlink" class="c-form__input" value="{{ $album->buttonlink }}"/>
                </div>
            </div>
            <div class="flex items-center flex-col md:flex-row mt-4 gap-4 max-w-full flex-wrap">
                <album-link
                    :repeats="{{ $album->albumMetas }}"
                    ref="albumref"
                >
                    <template #add="slotprops">
                        <div class="inline-block">
                            <input type="hidden" name="repeats" :value="slotprops.repeats" />
                            <div @click="this.$refs['albumref'].repeat++"
                                 class="rounded-full p-4 bg-black cursor-pointer hover:bg-white hover:text-black text-white duration-300">
                                <i class="fa-solid fa-plus fa-2x"></i>
                            </div>
                        </div>
                    </template>
                </album-link>
            </div>
            <div class="mt-4">
                <p class="text-lg font-bold">
                    Beschrijving:
                </p>
                <editor :text="{{ json_encode($album->description) }}"></editor>
            </div>
            <div class="mt-4">
                <input type="submit" class="c-button__black c-button cursor-pointer" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
