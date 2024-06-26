@extends('layouts.dashboard')
@section('pageTitle', 'Albums')
@section('content')
    <div class="flex justify-between flex-wrap">
        <h1 class="text-3xl">
            Albums
        </h1>
        <a href="/dashboard/albums/newalbum" class="c-button c-button__black">
            Nieuw album
        </a>
    </div>
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
        <table class="mt-4 w-full">
            @foreach($albums as $album)
                <tr class="border-b">
                    <td class="whitespace-nowrap px-4">
                        {{ $album->id }}
                    </td>
                    <td class="whitespace-nowrap px-4">
                        <a class="text-blue-400" href="/dashboard/albums/{{ $album->id }}">
                            {{ $album->name }}
                        </a>
                    </td>
                    <td class="whitespace-nowrap px-4">
                        {{ $album->author }}
                    </td>
                    <td class="whitespace-nowrap px-4">
                        {{ $album->created_at }}
                    </td>
                    <td class="p-4 whitespace-nowrap">
                        <popup
                            ref="popupref"
                            :width="'md:w-8/12 w-full'"
                        >
                            <template #openpopup>
                                <div class="mt-4">
                                    <a @click="this.$refs['popupref'].openPopup({{ $album->id }})"
                                       class="c-button c-button__red cursor-pointer">
                                        Verwijderen
                                    </a>
                                </div>
                            </template>
                            <template #popup="slotprops">
                                <div class="text-center">
                                    <p class="font-bold whitespace-normal">
                                        Weet je zeker dat je dit album wilt verwijderen? Hiermee wordt het
                                        album voorgoed verwijderd.
                                    </p>
                                    <div class="flex md:justify-center items-center flex-col md:flex-row mt-4">
                                        <div>
                                            <a @click="this.$refs['popupref'].close()"
                                               class="c-button c-button__grey cursor-pointer md:mr-4">
                                                Annuleren
                                            </a>
                                        </div>
                                        <form method="POST" class="mt-4 md:mt-0" action="{{ route('album.delete') }}">
                                            @csrf
                                            <input type="hidden" name="id" v-model="slotprops.id"/>
                                            <input type="submit" value="Verwijderen"
                                                   class="c-button c-button__red cursor-pointer"/>
                                        </form>
                                    </div>
                                </div>
                            </template>
                        </popup>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
