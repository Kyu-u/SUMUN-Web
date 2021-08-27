@extends('layouts.navbarnotlogin ')

@section('content')
<section class="bg-main-0 flex justify-center">
    <div class="max-w-7xl items-center">
        <div class="flex flex-col justify-center items-center py-10 bg-main-0">
            <img class="w-1/2" src="images/registmun.png" alt="">

            @if($errors->any())
            <h4 class='text-red-600'>{{$errors->first()}}</h4>
            @endif
            <form method="post" action="{{route('registMUN.post')}}"
                class="flex flex-wrap justify-evenly bg-main-0 px-10 xl:px-40 py-20">
                @csrf
                <div class="py-6 card">

                    <div class="w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

                        <div class="py-4 px-8 md:px-16 md:py-8">
                            <div class="flex flex-col text-white">
                                <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
                                <input class="text-black rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Username"
                                    name="username[]" placeholder="Username">
                                <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                                    class="">Council</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Council"
                                    name="council[]" placeholder="*******">

                                <div class="flex flex-row justify-between">
                                    <!-- START : BUTTON ADD-->
                                    <div class="px-2">

                                        <button type="button" class="flex justify-end items-center pt-4">
                                            <span class="pr-1 text-sm md:text-md">Add more</span> <svg width="11"
                                                height="10" viewBox="0 0 11 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                                <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </div>
                                    <!-- END : BUTTON ADD-->

                                    <!-- START : BUTTON DELETE-->
                                    <button type="button" class="flex justify-end items-center pt-4">
                                        <span class="pr-1 text-sm md:text-md">Delete</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <!-- END : BUTTON DELETE-->
                                </div>
                            </div>
                        </div>

                    </div>


                </div>



                <div class="py-6 card">

                    <div class="w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

                        <div class="py-4 px-8 md:px-16 md:py-8">
                            <div class="flex flex-col text-white">
                                <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Username"
                                    name="username[]" placeholder="Username">
                                <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                                    class="">Council</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Council"
                                    name="council[]" placeholder="*******">

                                <div class="flex flex-row justify-between">
                                    <!-- START : BUTTON ADD-->
                                    <div class="px-2">

                                        <button type="button" class="flex justify-end items-center pt-4">
                                            <span class="pr-1 text-sm md:text-md">Add more</span> <svg width="11"
                                                height="10" viewBox="0 0 11 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                                <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </div>
                                    <!-- END : BUTTON ADD-->

                                    <!-- START : BUTTON DELETE-->
                                    <button type="button" class="flex justify-end items-center pt-4">
                                        <span class="pr-1 text-sm md:text-md">Delete</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <!-- END : BUTTON DELETE-->
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="py-6 card">

                    <div class="w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

                        <div class="py-4 px-8 md:px-16 md:py-8">
                            <div class="flex flex-col text-white">
                                <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Username"
                                    name="username[]" placeholder="Username">
                                <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                                    class="">Council</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Council"
                                    name="council[]" placeholder="*******">

                                <div class="flex flex-row justify-between">
                                    <!-- START : BUTTON ADD-->
                                    <div class="px-2">

                                        <button type="button" class="flex justify-end items-center pt-4">
                                            <span class="pr-1 text-sm md:text-md">Add more</span> <svg width="11"
                                                height="10" viewBox="0 0 11 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                                <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </div>
                                    <!-- END : BUTTON ADD-->

                                    <!-- START : BUTTON DELETE-->
                                    <button type="button" class="flex justify-end items-center pt-4">
                                        <span class="pr-1 text-sm md:text-md">Delete</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <!-- END : BUTTON DELETE-->
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="py-6 card">

                    <div class="w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

                        <div class="py-4 px-8 md:px-16 md:py-8">
                            <div class="flex flex-col text-white">
                                <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Username"
                                    name="username[]" placeholder="Username">
                                <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                                    class="">Council</label>
                                <input class="rounded-md py-1 px-2 md:px-4 md:py-2" type="text" id="Council"
                                    name="council[]" placeholder="*******">

                                <div class="flex flex-row justify-between">
                                    <!-- START : BUTTON ADD-->
                                    <div class="px-2">

                                        <button type="button" class=" flex justify-end items-center pt-4">
                                            <span class="pr-1 text-sm md:text-md">Add more</span> <svg width="11"
                                                height="10" viewBox="0 0 11 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                                <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </div>
                                    <!-- END : BUTTON ADD-->

                                    <!-- START : BUTTON DELETE-->
                                    <button type="button" class="flex justify-end items-center pt-4">
                                        <span class="pr-1 text-sm md:text-md">Delete</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <!-- END : BUTTON DELETE-->
                                </div>
                            </div>
                        </div>

                    </div>


                </div>



                <div class="w-full flex justify-start">
                    <button type="button" class="">
                        <div class="flex flex-row">
                            <p class="text-white hover:text-signup-0 transition duration-300" href="">Add More +
                            </p>
                        </div>

                    </button>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit" class="bg-signup-0  flex justify-center items-center rounded-lg">
                        <div class="px-4 py-2 text-white" href="">Submit</div>
                    </button>
                </div>
            </form>









        </div>
</section>
@endsection