@extends('layouts.navbarnotlogin ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20">
    <div class=" md:w-8xl relative flex justify-center overflow-hidden p-5 md:p-0">
        <img id="myImg" class="h-98 md:h-auto" src="images/bgbg.png" alt="">
        <div
            class="flex text-white text-base md:text-xl font-semibold font-sans gap-x-5 items-center absolute top-10 md:top-14 left-10 md:left-14 ">
            <button type="button" onclick="javascript:history.back()"><img class=" w-4 h-4 md:w-8 md:h-8 "
                    src="images/back.png" alt=""></button>
            Back
        </div>
        <div class="absolute p-10 lg:p-16 flex flex-col md:right-0 top-0 w-full md:w-1/2 pt-10 md:pt-10 mt-6 md:mt-0">
            <div class="text-white font-sans font-semibold text-xl md:text-2xl lg:text-4xl ">
                Create a <br> New Account
            </div>
            <div class="text-white font-sans font-semibold text md:text-xl lg:text-3xl pt-4">
                Please fill out the form.
            </div>


            @if ($errors->any())
            <div class="alert alert-danger text-white pt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>*{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('regis2')}}" method="POST" class="pt-2 flex flex-col">
                @csrf
                <label class="pb-1 pt-2 text-sm md:text-base lg:text-xl text-white" for="Email/Phone">Name</label>
                <input class="outline-none px-3 w-full h-5 lg:h-12 lg:w-96  rounded-md text-sm py-4  " type="text"
                    id="name" name="name" placeholder="Your Name...">
                <label class="pb-1 pt-2 text-sm md:text-base lg:text-xl text-white" for="Email/Phone">Username</label>
                <input class="outline-none px-3 w-full h-5 lg:h-12 lg:w-96  rounded-md text-sm py-4  " type="text"
                    id="username" name="username" placeholder="Your Name...">
                <label class="pb-1 pt-2 text-sm md:text-base lg:text-xl text-white" for="Email/Phone">Email</label>
                <input class="outline-none px-3 w-full h-5 lg:h-12 lg:w-96  rounded-md text-sm py-4  " type="text"
                    id="email" name="email" placeholder="Your Email...">
                <label class="pb-1 pt-2 text-sm md:text-base lg:text-xl text-white" for="lname">Password</label>
                <input class="outline-none px-3 w-full h-5 lg:h-12 lg:w-96  rounded-md text-sm py-4  text-black"
                    type="password" id="password" name="password" placeholder="Password...">
                <label class="pb-1 pt-2 text-sm md:text-base lg:text-xl text-white" for="lname">Confirm Password</label>
                <input class="outline-none px-3 w-full h-5 lg:h-12 lg:w-96  rounded-md text-sm py-4  text-black"
                    type="password" id="password_confirmation" name="password_confirmation"
                    placeholder=" Confirm Password...">

                <div class="flex justify-between w-full pt-5 lg:w-96">

                    <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center">
                        <button type="button" onclick="javascript:history.back()"><img class=" w-4 h-4 md:w-8 md:h-8"
                                src="images/back.png" alt=""></button>
                        Back
                    </div>
                    <a href={{route('signup3')}}>
                        <button type="submit"
                            class="bg-signup-0 text-white text-md md:text-xl font-semibold font-sans w-20 h-7 md:w-30 md:h-10 lg:w-40 lg:h-12 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
                            Submit
                        </button>
                    </a>

                </div>
            </form>


        </div>
    </div>
</div>


@endsection
