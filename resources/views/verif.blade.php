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

                                    <hr class="text-xs md:text-md pb-4">

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
                <form action=" max-w-7xl mx-auto relative z-10">

                    <div class=" flex flex-row justify-evenly items-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">

                                <input type="checkbox" id="mun" name="mun" value="mun" class="">

                                <label class="text-xxs md:text-base text-white px-2 sm:px-4" for="mun">Bukti Pembayaran
                                    MUN</label>
                            </div>

                            <div class="flex flex-row items-center pt-2">
                                <input type="checkbox" id="webinar" name="webinar" value="webinar" class="">
                                <label class="text-xxs md:text-base text-white px-2 sm:px-4 " for="webinar">Bukti
                                    Pembayaran
                                    Webinar</label>
                            </div>



                        </div>
                        <div class="text-white relative z-10">
                            <button
                                class="bg-signup-0 text-white font-bold py-2 px-4 w-auto inline-flex items-center rounded-lg">
                                <svg class="hidden md:block" fill="#FFF" height="18" viewBox="0 0 24 24" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
                                </svg>
                                <span class="text-xxs ml-0 md:ml-2">Upload Image</span>
                            </button>
                            <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" type="file"
                                name="verifImage" accept="fileName" multiple>
                        </div>
                    </div>
                    <div class="py-20 flex justify-center">
                        <input class="rounded-lg bg-signup-0 px-4 py-2 text-white text-xs sm:text-base" type="submit"
                            value="Submit">
                    </div>
                </form>
            </div>

            <img src="images/dna2.png" alt="" class="absolute hidden md:block md:-top-1/10 xl:-top-1/6 2xl:-top-1/3 z-0">
        </section>
@endsection