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
                                Webinar
                            </h1>

                            <hr class="pb-4">

                            <h1 class="text-sm md:text-xl font-bold">
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

            </div>

        </div>
    </div>

    <!-- END NOREK-->

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
            <div class=" flex flex-col md:flex-row justify-evenly items-center relative z-10">
                <div class="flex flex-row items-center">
                    <label for="payment" class="text-white pr-4">Click to choose:</label>
                    <select name="payment" id="payment"
                        class="text-xxs md:text-md rounded-xl border-signup-0 border-4 bg-main-0 text-white px-4 w-auto">
                        <option value="Webinar">Pembayaran Webinar</option>
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