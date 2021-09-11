@extends('layouts.navbarprofile ')

@section('content')
<section class="py-40 flex flex-col justify-center bg-main-0  mx-auto w-full px-4 sm:px-0 relative">

    <div
        class=" max-w-7xl mx-auto px-2 sm:px-10 w-72 go:w-96 sm:w-97 bg-cardprofile-0 border-border-0 border-4 rounded-3xl relative z-10">
        <div class="flex flex-row px-2 items-center">
            <ul class="text-xxs sm:text-base flex flex-col text-signup-0 py-6">
                <p class=" py-2">
                    School Name</p>
                <p class="py-2">
                    Major</p>
                <p class="py-2">
                    Council
                </p>
                <p class="py-2">
                    Country</p>
            </ul>
            <div class="px-4 sm:px-8">
                <div class="w-1 h-20 bg-garis-0 rounded-lg">
                </div>
            </div>

            <ul class="text-xxs sm:text-base flex flex-col text-white py-6 pl-2">
                <p class="py-2">
                    {{$user->school_name}}
                    {{$user->university}}
                </p>
                <p class="py-2">
                    {{ $user->major }}</p>
                <p class="py-2">
                    @if($user->mun_id)
                    {{$user->mun_id}}
                    @else
                    Not yet
                    @endif
                </p>
                <p class="py-2">
                    @if($user->country)
                    {{$user->country}}
                    @else
                    Not yet
                    @endif
                </p>
            </ul>
        </div>


    </div>

    @if($user->verified == 2)
    <div class="flex flex-col md:flex-row items-center justify-center pt-32 relative z-10">

        <a href="#"
            class="w-auto bg-cardprofile-0 h-auto text-white px-6 py-4 rounded-lg hover:bg-signup-0 transform transition duration-300">
            Zoom MUN
        </a>


        <div class="px-0 md:px-10 py-10 md:py-0">
            <a href="#"
                class="w-auto bg-cardprofile-0 h-auto text-white px-6 py-4 rounded-lg hover:bg-signup-0 transform transition duration-300">
                Zoom Pre-Event
            </a>
        </div>


        <a href="#"
            class="w-auto bg-cardprofile-0 h-auto text-white px-6 py-4 rounded-lg hover:bg-signup-0 transform transition duration-300"
            download>
            Download RoP
        </a>



    </div>
    @endif
    <img src="images/dna2.png" alt="" class="hidden md:block absolute z-0 md:-top-1/4 lg:-top-1/2 animate-pulse">
    <img src="images/dna3.png" alt="" class="block md:hidden absolute z-0 -top-1/16 ip:-top-1/10 animate-pulse">
</section>

@endsection