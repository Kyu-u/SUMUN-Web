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
        Please fill out the form.
      </div>

      
      <form method="POST" action="{{ route('signup2') }}" class="pt-10 flex flex-col">
        @csrf
            <label class="pb-2 text-xl text-white"for="Email/Phone">Name</label>
            <input class=" outline-none px-3 w-96 rounded-md text-sm py-4 " type="text" id="name" name="name" placeholder="Your Name...">
            <label class="pb-2 text-xl text-white"for="Email/Phone">Email</label>
            <input class=" outline-none px-3 w-96 rounded-md text-sm py-4 " type="text" id="email" name="email" placeholder="Your Email...">
            <label class="py-2 text-xl text-white"for="lname">Password</label>
            <input class=" outline-none px-3 w-96 rounded-md text-sm py-4 text-black" type="password" id="password" name="password" placeholder="Password...">
            <label class="py-2 text-xl text-white"for="lname">Confirm Password</label>
            <input class=" outline-none px-3 w-96 rounded-md text-sm py-4 text-black" type="password" id="cpassword" name="cpassword" placeholder=" Confirm Password...">
            
          </form>

        <div class="flex justify-between w-96">
          
          <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center">
            <button type="button" onclick="javascript:history.back()"><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back
          </div>

          <a href={{route('signup3')}}>
            <button class="bg-signup-0 text-white text-xl font-semibold font-sans w-40 h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
              Submit
            </button>
          </a>

        </div>
        

        
    </div>
  </div>
</div>


@endsection