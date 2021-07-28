@extends('layouts.signup ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20">
  <div class=" w-5/7 relative flex justify-center overflow-hidden">
    <img src="images/bgbg.png" alt="">
    <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center absolute top-14 left-14">
            <button type="button" onclick="javascript:history.back()"><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back to homepage
          </div>
    <div class="absolute p-20 flex flex-col right-0 top-0 w-1/2">
      <div class="text-white font-sans font-semibold text-8xl">
        Hello, <br> Welcome!
      </div>
      <div class="text-white font-sans font-semibold text-3xl pt-4">
        Please choose to create an account.
      </div>

      <a href="{{ route('signup2') }}" class = "self-center">
        <button type="button" class="bg-signup-0 hover:bg-buttonactive-0  text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-16">
          Create a new account
        </button>
      <a href="{{ route('googleRedirect') }}">
        <button type="button"  class="border-2 hover:border-buttonactive-0 border-signup-0 text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-10 flex justify-center items-center">
          Sign up with
          <img class="pl-3 w-14 self-center" src="images/google.png" alt="">
        </button>
        
        <img class="w-40 self-center pt-20" src="images/line.png" alt="">

        <div class="text-white font-sans self-center pt-10">
          Already have an account? <a href=""><span class="hover:text-signup-0">Log in</span></a>
        </div>
      

    </div>
  </div>
</div>


@endsection