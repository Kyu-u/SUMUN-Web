@extends('layouts.signup ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20">
  <div class=" md:w-8xl relative flex justify-center overflow-hidden p-5 md:p-0">
    <img id="myImg" class="h-98 md:h-auto" src="images/bgbg.png" alt="">
    <div
      class="flex text-white text-base md:text-xl font-semibold font-sans gap-x-5 items-center absolute top-10 md:top-14 left-10 md:left-14 ">
      <button type="button" onclick="javascript:history.back()"><img class=" w-4 h-4 md:w-8 md:h-8 "
          src="images/back.png" alt=""></button>
      Back to homepage
    </div>
    <div class="absolute p-10 lg:p-16 flex flex-col md:right-0 top-0 w-full md:w-1/2 pt-16 md:pt-10 mt-6 md:mt-0">
      <div class="text-white font-sans font-semibold text-6xl md:text-6xl lg:text-8xl ">
        Hello, <br> Welcome!
      </div>
      <div class="text-white font-sans font-semibold text-xl md:text-3xl pt-4">
        Please choose to create an account.
      </div>

      <a href="{{ route('signup2') }}" class="self-center">
        <button type="button"
          class="bg-signup-0 hover:bg-buttonactive-0  text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-16">
          Create a new account
        </button>
        <a href="{{ route('googleRedirect') }}" class="self-center">
          <button type="button"
            class="border-2 hover:border-buttonactive-0 border-signup-0 text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-10 flex justify-center items-center">
            Sign up with
            <img class="pl-3 w-14 self-center" src="images/google.png" alt="">
          </button>

            <img class="mx-auto self-center pt-5 md:pt-10 lg:pt-20" src="images/line.png" alt="">

          <div class="text-white font-sans self-center pt-10">
            Already have an account? <a href=""><span class="hover:text-signup-0">Log in</span></a>
          </div>


    </div>
  </div>
</div>


@endsection