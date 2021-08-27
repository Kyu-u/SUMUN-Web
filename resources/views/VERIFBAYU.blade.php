@extends('layouts.adminnav ')
@section('content')
<div class=" flex flex-col items-center">
    <h1 class="text-4xl sm:text-6xl pb-20 text-center " style="background: #57CA85;
    background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Administration</h1>
    <div class=" fixed inset-0 hidden justify-center h-screen items-center z-50 bg-black bg-opacity-50" id="overlay">
        <div
            class="bg-gradient-to-r from-signup-0 to-tableisi-0 w-100 h-97 rounded-3xl shadow-2xl px-20 py-14 flex text-white font-sans">
            <div class="flex flex-col items-center w-3/7 h-96 justify-between">
                <div class="text-center ">
                    Bukti Pembayaran.jpg
                </div>
            </div>
            <div class="flex flex-col items-center justify-between pt-5">
                <div class="flex flex-col overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-thin object-contain
                scrollbar-track-main-0 scrollbar-thumb-signup-0 pr-56 h-72 text-xl gap-y-5 font-semibold">
                    @foreach($images as $image)
                    @foreach($users as $user)
                    @if($image->user_id == $user->user_id)
                    <div class="flex flex-wrap">
                        {{$user->name}}
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
                <div class="flex justify-center gap-x-5">
                    <button id="modalback" class="border-signup-0 border-2 w-40 rounded-md py-1 font-bold">
                        Back
                    </button>
                    <button class="w-40 rounded-md py-1 bg-signup-0 font-bold">
                        Verify
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="relative hidden md:flex justify-center mx-auto w-6/7 h-96 sm:h-97 sm:w-97  md:w-98 lg:w-99">

        <div class="relative w-full h-full rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-10">

            <div class="pt-2 sm:pt-5 flex flex-col lg:flex-row lg:justify-between ">
                <div class="flex flex-wrap h-64 sm:h-72 md:h-80 lg:h-96 gap-10 w-full overflow-y-scroll
          scrollbar-thumb-rounded-full scrollbar-thin object-contain
          scrollbar-track-main-0 scrollbar-thumb-signup-0 whitespace-nowrap pr-1">
                    <!-- hNBErHnkrsSUjWpHGVpIPZvgiDvwXRmuTzxpbvel.png -->
                    @foreach($images as $image)
                    <button id="overlaybtn2" type="button">
                        <div class="flex flex-col items-center">
                            <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl">
                                <img src="{{ route('image.displayImage',$image->file_path) }}" alt="" />
                            </div>
                            <span class="text-white font-sans mt-2 mx-auto">
                                {{$image['name']}}
                            </span>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div
        class="flex md:hidden flex-col p-5 items-center w-72 h-80 rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0">
        <div class="flex flex-wrap gap-3 h-72 overflow-y-scroll
    scrollbar-thumb-rounded-full scrollbar-thin object-contain
    scrollbar-track-main-0 scrollbar-thumb-signup-0 whitespace-nowrap">
            @foreach($images as $image)
            <div class="flex flex-col items-center">
                <div class="w-16 lg:w-32 h-20 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white text-xs font-sans mt-2 mx-auto">
                    {{$image['name']}}
                </span>
            </div>
            @endforeach

        </div>
        <a class="self-end pt-2 sm:pt-5">
            <button type="submit"
                class="bg-signup-0 text-white text-sm  font-semibold font-sans w-16 h-7 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
                Submit
            </button>
        </a>
    </div>

    <div
        class="flex md:hidden gap-y-4 flex-col p-5 items-center w-72 h-60 rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 mt-10">
        @foreach($images as $image)
        <div class="flex flex-col items-center">
            <div class="w-16 lg:w-32 h-20 lg:h-40 bg-adminbox-0 rounded-xl"></div>
            <span class="text-white text-xs font-sans mt-2 mx-auto">
                {{$image['name']}}
            </span>
        </div>
        @endforeach
        <div class="flex flex-col w-full items-center gap-3 h-30 overflow-y-scroll
    scrollbar-thumb-rounded-full scrollbar-thin object-contain
    scrollbar-track-main-0 scrollbar-thumb-signup-0 whitespace-nowrap text-white text-xs">
            <div class="flex flex-wrap">
                Drigo Alexander Sihombing
            </div>
            <div class="flex flex-wrap">
                Drigo Alexander Sihombing
            </div>
            <div class="flex flex-wrap">
                Drigo Alexander Sihombing
            </div>
            <div class="flex flex-wrap">
                Drigo Alexander Sihombing
            </div>
            <div class="flex flex-wrap">
                Drigo Alexander Sihombing
            </div>
        </div>
    </div>

</div>


@endsection