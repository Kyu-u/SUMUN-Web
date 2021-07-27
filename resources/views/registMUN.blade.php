@extends('layouts.navbarnotlogin ')

@section('content')
<section class="bg-main-0 flex justify-center">
        <div class="max-w-7xl items-center">
            <div class="flex flex-col justify-center items-center py-10 bg-main-0">
                <img class="w-1/2" src="images/registmun.png" alt="">


                <div class="flex flex-wrap justify-evenly bg-main-0 px-10 xl:px-40 py-20">
                    <div class="py-10">
                        <div class="w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl">

                            <form class="px-16 py-8" action="" method="" id="registMUN">
                                <div class="flex flex-col text-white">
                                    <label class="pb-2" for="Username" class="">Username</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Username" name="Username"
                                        placeholder="Drigo Alexander">
                                    <label class="pt-4 pb-2 text-white" for="Email" class="">Council</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Council" name="Council"
                                        placeholder="*******">

                                    <button class="flex justify-end items-center pt-4">
                                        <span class="pr-1">Add more</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="py-10">
                        <div class="w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl">

                            <form class="px-16 py-8" action="" method="">
                                <div class="flex flex-col text-white">
                                    <label class="pb-2" for="Username" class="">Username</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Username" name="Username"
                                        placeholder="Drigo Alexander">
                                    <label class="pt-4 pb-2 text-white" for="Email" class="">Council</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Council" name="Council"
                                        placeholder="*******">

                                    <button class="flex justify-end items-center pt-4">
                                        <span class="pr-1">Add more</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="py-10">
                        <div class="w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl">

                            <form class="px-16 py-8" action="" method="">
                                <div class="flex flex-col text-white">
                                    <label class="pb-2" for="Username" class="">Username</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Username" name="Username"
                                        placeholder="Drigo Alexander">
                                    <label class="pt-4 pb-2 text-white" for="Email" class="">Council</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Council" name="Council"
                                        placeholder="*******">

                                    <button class="flex justify-end items-center pt-4">
                                        <span class="pr-1">Add more</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="py-10">
                        <div class="w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl">

                            <form class="px-16 py-8" action="" method="">
                                <div class="flex flex-col text-white">
                                    <label class="pb-2" for="Username" class="">Username</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Username" name="Username"
                                        placeholder="Drigo Alexander">
                                    <label class="pt-4 pb-2 text-white" for="Email" class="">Council</label>
                                    <input class="rounded-md px-4 py-2" type="text" id="Council" name="Council"
                                        placeholder="*******">

                                    <button class="flex justify-end items-center pt-4" type="submit">
                                        <span class="pr-1">Add more</span> <svg width="11" height="10"
                                            viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 1V9" stroke="#51B77A" stroke-width="2" stroke-linecap="square"
                                                stroke-linejoin="round" />
                                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>

                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

                <button type="submit" form="registMUN" value="submit" class="">
                    <div class="bg-signup-0 px-4 py-2 text-white rounded-lg">
                        Submit
                    </div>
                </button>
            </div>





        </div>
    </section>
@endsection