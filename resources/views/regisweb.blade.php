@extends('layouts.navbarnotlogin ')


@section('content')

<div class=" flex flex-col items-center pt-16 w-full">
    <div class="flex flex-col items-start pb-10 md:pb-40 px-5">
        <h1 class="text-5xl sm:text-7xl text-white font-semibold pb-5 md:pb-10">
            Registration
        </h1>
        <h1 class="text-secondheader-0 text-4xl font-semibold pb-5">
            Webinar Edukatif
        </h1>

        <div class="self-end"><svg class="w-72" width="437" height="7" viewBox="0 0 437 7" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <line x1="433.5" y1="3.5" x2="3.5" y2="3.5" stroke="url(#paint0_linear)" stroke-opacity="0.5"
                    stroke-width="7" stroke-linecap="round" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1.21579e-08" y1="0.00230498" x2="437" y2="-3.61852e-08"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.125" stop-color="#1F1F1F" />
                        <stop offset="1" stop-color="#317E73" />
                    </linearGradient>
                </defs>
            </svg></div>



    </div>

    <img class="hidden sm:block" src="images/fotoregisweb.png" alt="">
    <img class="sm:hidden" src="images/fotoregiswebmobile.png" alt="">
    <div class="absolute top-regiswebmobile right-0 md:overflow-hidden md:w-regisgradient md:block">
        <img src="images/regisgradient.png" alt="">
    </div>

    {{-- BANNER TEXT --}}

    <div class=" w-full md:w-8xl mx-auto md:absolute md:h-98 md:top-regisweb z-10 px-10 pb-10">

        <div class="w-full flex flex-col items-start md:items-end">
            <h1 class="text-3xl md:text-6xl pb-2 md:pb-4 font-semibold" style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;">
                Webinar Ah Mantab
            </h1>
            <svg class="w-72" width="437" height="7" viewBox="0 0 437 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="433.5" y1="3.5" x2="3.5" y2="3.5" stroke="url(#paint0_linear)" stroke-opacity="0.5"
                    stroke-width="7" stroke-linecap="round" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1.21579e-08" y1="0.00230498" x2="437" y2="-3.61852e-08"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.125" stop-color="#1F1F1F" />
                        <stop offset="1" stop-color="#317E73" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="md:w-1/2 pt-4 md:pt-8">
                <p class="text-sm md:text-lg  md:text-right text-white pb-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit ante, iaculis ac tellus at,
                    porttitor ultricies lacus. Nulla sollicitudin ante vitae tellus scelerisque, quis venenatis ipsum
                    rutrum. Aenean lectus tortor, consequat sit amet pharetra ut, elementum in mauris.
                </p>

                <div class="flex text-white gap-x-6 md:gap-x-16 font-sans pb-4 md:pb-10">
                    <div class="flex-1 flex flex-col items-center">
                        <span class="text-secondheader-0 text-sm md:text-xl pb-2 md:pb-5">Join on:</span>
                        <span class="text-xl md:text-5xl font-semibold">1 September</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <span class="text-secondheader-0 text-sm md:text-xl pb-2 md:pb-5">Time:</span>
                        <span class="text-xl md:text-5xl font-semibold">12:00 - 15:00</span>
                    </div>

                </div>
                <div class="flex flex-col items-end text-right mt-5">
                    <span class="text-secondheader-0 text-sm md:text-xl pb-1 md:pb-5">With</span>
                    <h1 class="text-2xl md:text-5xl font-semibold pb-2" class="" style="background: #F1F1F1;
                        background: -webkit-linear-gradient(to bottom, #F1F1F1 0%, #184E68 100%);
                        background: -moz-linear-gradient(to bottom, #F1F1F1 0%, #184E68 100%);
                        background: linear-gradient(to bottom, #F1F1F1 0%, #184E68 100%);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">Ariana Grande</h1>
                    <span class="text-secondheader-0 text-xl pb-5">CEO of Mantab Company</span>

                </div>

            </div>
        </div>




    </div>
    <form action="">
        @csrf
        <div id="inputcolumn" class="flex flex-col">
            <span class="text-xl text-secondheader-0 pb-5">Username</span>
            <div class="relative">

                <input class="bg-transparent border-b-2 h-12 w-72 text-white" type="text" name="" id="">
                <button type="button" id="addinput" class=""><svg class=" absolute right-2 my-auto top-0 bottom-0"
                        width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                            stroke-linejoin="round" />
                        <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                            stroke-linejoin="round" />
                    </svg></button>
            </div>
            <button class="bg-signup-0 w-28 h-11 rounded-md text-white font-semibold self-end mt-10">Submit</button>

        </div>
    </form>


</div>



@endsection