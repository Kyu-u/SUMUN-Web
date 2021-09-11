@extends('layouts.navbarnotlogin ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20 px-5">
  <div class=" md:w-8xl relative flex justify-center overflow-hidden p-5 md:p-0">
    <img id="myImg" class="h-98 md:h-auto" src="images/bgbg.png" alt="">
    <div class="flex text-white text-base md:text-xl font-semibold font-sans gap-x-5 items-center absolute top-10 md:top-14 left-10 md:left-14">
      <button type="button" onclick="javascript:history.back()"><img class=" w-4 h-4 md:w-8 md:h-8 " src="images/back.png"
          alt=""></button>
      Back
    </div>
    <div class="absolute p-10 lg:p-16 flex flex-col md:right-0 top-0 w-full md:w-1/2 pt-20 md:pt-10 mt-6 md:mt-0">
      <div class="text-white font-sans font-semibold text-3xl md:text-4xl ">
        Create a <br> New Account
      </div>
      <div class="text-white font-sans font-semibold text-xl md:text-3xl pt-4">
        Please select your education level.
      </div>

      <a href={{ route('signup4') }}>
        <button type="button"
          class="bg-signup-0 hover:bg-buttonactive-0  text-white text-xl font-semibold font-sans w-full md:w-80 h-14 rounded-md self-center mt-10 md:mt-12 lg:mt-16">
          Senior High School Student
        </button>
      </a>

      <a href={{ route('signup5') }}>
        <button type="button"
          class="border-2 hover:border-buttonactive-0 border-signup-0 text-white text-xl font-semibold font-sans w-full md:w-80  h-14 rounded-md self-center mt-10 flex justify-center items-center">
          Undergraduate Student
        </button>
      </a>

      <div class="flex justify-between w-96 pt-5 md:pt-10 lg:pt-20">

        <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center">
          <button type="button" onclick="javascript:history.back()"><img class="  w-4 h-4 md:w-8 md:h-8 " src="images/back.png"
              alt=""></button>
          Back
        </div>



      </div>



    </div>
  </div>
</div>


@endsection