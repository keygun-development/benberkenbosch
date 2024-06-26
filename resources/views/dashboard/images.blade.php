@extends('layouts.dashboard')
@section('pageTitle', 'Floating images')
@section('content')
    <div class="flex justify-between flex-wrap">
        <h1 class="text-3xl">
            Images
        </h1>
        @if(count($images) < 8)
            <a href="/dashboard/images/newimage" class="c-button c-button__black">
                Nieuwe image
            </a>
        @endif
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
        <images-slide
            :images="{{ $images }}"
            ref="imageref"
        >
            <template #image="slotprops">
                <tr class="border-b flex items-center justify-between">
                    <td class="whitespace-nowrap px-4">
                        @{{ slotprops.image.id }}
                    </td>
                    <td class="whitespace-nowrap px-4">
                        <a class="text-blue-400" :href="'/dashboard/images/'+slotprops.image.id">
                            <div class="inline-block">
                                <img class="max-w-[90px] max-h-[90px] aspect-square"
                                     :src="slotprops.url+'/'+slotprops.image.image"/>
                            </div>
                        </a>
                    </td>
                    <td class="whitespace-nowrap px-4">
                        @{{ slotprops.image.position }}
                    </td>
                    <td class="whitespace-nowrap px-4">
                        @{{ slotprops.image.created_at }}
                    </td>
                    <td class="p-4 whitespace-nowrap">
                        <popup
                            ref="popupref"
                            :width="'md:w-8/12 w-full'"
                        >
                            <template #openpopup>
                                <div class="mt-4">
                                    <a @click="this.$refs['popupref'].openPopup(slotprops.image.id)"
                                       class="c-button c-button__red cursor-pointer">
                                        Verwijderen
                                    </a>
                                </div>
                            </template>
                            <template #popup="popupprops">
                                <div class="text-center">
                                    <p class="font-bold whitespace-normal">
                                        Weet je zeker dat je de floating image wilt verwijderen? Hiermee wordt de
                                        floating image voorgoed verwijderd.
                                    </p>
                                    <div class="flex md:justify-center items-center flex-col md:flex-row mt-4">
                                        <div>
                                            <a @click="this.$refs['popupref'].close()"
                                               class="c-button c-button__grey cursor-pointer md:mr-4">
                                                Annuleren
                                            </a>
                                        </div>
                                        <form method="POST" class="mt-4 md:mt-0"
                                              action="{{ route('image.delete') }}">
                                            @csrf
                                            <input type="hidden" name="id" v-model="popupprops.id"/>
                                            <input type="submit" value="Verwijderen"
                                                   class="c-button c-button__red cursor-pointer"/>
                                        </form>
                                    </div>
                                </div>
                            </template>
                        </popup>
                    </td>
                </tr>
            </template>
        </images-slide>
    </div>
@endsection
