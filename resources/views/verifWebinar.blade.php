@extends('layouts.navbarprofile ')

@section('content')
<section class="relative">

    <div class="bg-main-0 flex flex-col px-2 md:px-20  justify-center py-10 md:py-40 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" enctype="multipart/form-data" class='relative z-10' action="{{route('verif.post')}}">
            @csrf
            <div class=" flex flex-col justify-evenly items-center relative z-10">
                        <div class="px-0 md:px-6 py-6 md:py-0">
                            <div class="w-auto bg-signup-0 text-white rounded-xl">
                                <div class="py-6 px-6 flex flex-col">

                                    <h1 class="text-sm md:text-xl font-bold text-center">
                                       Webinar
                                    </h1>

                                    <hr class="text-xs md:text-md pb-4 text-center">

                                    <h1 class="text-sm md:text-xl font-bold ">
                                        Bank Account / Bank Name
                                    </h1>

                                    <p class="text-xs md:text-md pt-4 pb-6">
                                        Surabaya Model United Nations / BCA
                                    </p>

                                    <h1 class="text-sm md:text-xl font-bold">
                                        Total
                                    </h1>

                                    <p class="text-xs md:text-md pt-4">
                                        Rp 400.000,00 or $30 USD
                                    </p>
                                </div>
                            </div>
                        </div> 
                        <div class="text-white relative z-10 pt-16">
                            
                                <label for="upload-photo" class="bg-signup-0 rounded-lg px-2 py-2 flex flex-row items-center justify-center"> <span class="pr-2"><svg class="hidden md:block" fill="#FFF" height="18" viewBox="0 0 24 24" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
                                </svg></span> Upload Image</label>
                                <input type="file" name="file" id="upload-photo" class="absolute z-0 opacity-0"/>
                        </div>
                    </div>
                    <div class="pt-10 flex justify-center">
                        <input class="rounded-lg bg-signup-0 px-4 py-2 text-white text-xs sm:text-base" type="submit"
                            value="Submit">
                    </div>
        </form>
    </div>

    <img src="images/dna2.png" alt="" class="absolute hidden md:block md:-top-1/10 xl:-top-1/6 2xl:-top-1/3 z-0">
</section>
@endsection
