@extends('layouts.navbarprofile ')

@section('content')
<section class="relative">

    <!-- START NO REK-->
    <div class="bg-main-0 pt-40 md:pt-20 relative">
        <div class="mx-auto max-w-7xl">


            <div class="flex flex-col md:flex-row pb-10 items-center justify-center relative z-10">
                <div class="px-0 md:px-6 py-6 md:py-0">
                    <div class="w-auto bg-signup-0 text-white rounded-xl">
                        <div class="py-6 px-6 flex flex-col">

                            <h1 class="text-sm md:text-xl font-bold">
                                Model United Nations
                            </h1>

                            <hr class="pb-4">

                            <h1 class="text-sm md:text-xl font-bold">
                                Name / Payment Option / Number
                            </h1>

                            <p class="text-xs md:text-md pt-4 pb-6">
                               Raysya Farah Mumtaz / BCA / 7391384472 <br>
                               Novita Wahyu Saputri / GOPAY / 081325127784 <br>
                               Salsabilla Kharisma / OVO / 087754055717 <br>
                               Sciencenia / Paypal / <a href="paypal.me/sciencenia" target="_blank" class="text-white hover:text-signup-0">paypal.me/sciencenia</a>
                            </p>

                            <h1 class="text-sm md:text-xl font-bold">
                                Total
                            </h1>

                            <p class="text-xs md:text-md pt-4">
                                Rp. {{$total}},00 <span class="px-2">or</span> USD {{round($total/14250)}}$
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div
                class="pt-4 text-white text-lg ip:text-xl tracking-widest md:text-2xl flex justify-center items-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="border-2 rounded-md w-auto px-4 py-2 border-white font-semibold">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

        </div>
    </div>

    <!-- END NOREK-->

    <div class="bg-main-0 flex flex-col px-2 md:px-20  justify-center py-10 md:py-40 ">
        <form method="POST" enctype="multipart/form-data" class='relative z-10' action="{{route('verif.post')}}">
            @csrf
            <div class=" flex flex-col md:flex-row justify-evenly items-center relative z-10">
                <div class="flex flex-row items-center">
                    <label for="payment" class="text-white pr-4">Click to choose:</label>
                    <select name="payment" id="payment"
                        class="text-xxs md:text-md rounded-xl border-signup-0 border-4 bg-main-0 text-white px-4 w-auto">
                        <option value="MUN">Pembayaran MUN</option>
                    </select>



                </div>
                <div class="text-white relative z-10 py-16 md:py-0">
                    <div class="bg-signup-0 text-white font-bold py-2 px-4 w-auto inline-flex items-center rounded-lg">
                        <label for="upload-photo" class="bg-signup-0 rounded-lg px-2 py-2">Upload Image</label>
                        <input type="file" name="file" id="upload-photo" class="absolute z-0 opacity-0" />
                    </div>
                </div>
            </div>
            <div class="py-20 flex justify-center">
                <button class="rounded-lg bg-signup-0 px-4 py-2 text-white text-xs sm:text-base" type="submit"
                    value="Submit">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <img src="images/dna2.png" alt="" class="absolute hidden md:block md:-top-1/10 xl:-top-1/6 2xl:-top-1/3 z-0">
</section>
@endsection