@extends('layouts.signup ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20">
  <div class=" w-5/7 relative flex justify-center overflow-hidden">
    <img src="images/bgbg.png" alt="">
    <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center absolute top-14 left-14">
            <button type="button" onclick="javascript:history.back()"><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back
          </div>
    <div class="absolute p-20 flex flex-col right-0 top-0 w-1/2">
      <div class="text-white font-sans font-semibold text-7xl">
        Create a <br> New Account
      </div>
      <div class="text-white font-sans font-semibold text-3xl pt-4">
        Please select your education level.
      </div>

      
      <button type="button"  class="bg-signup-0 hover:bg-buttonactive-0  text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-16">
          Senior High School Student
        </button>

        <button type="button"  class="border-2 hover:border-buttonactive-0 border-signup-0 text-white text-xl font-semibold font-sans w-80 h-14 rounded-md self-center mt-10 flex justify-center items-center">
          Undergraduate Student
        </button>

        <div class="flex justify-between w-96 pt-20">
          
          <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center">
            <button type="button" onclick="javascript:history.back()"><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back
          </div>

          

        </div>
        

        
    </div>
  </div>
</div>


@endsection