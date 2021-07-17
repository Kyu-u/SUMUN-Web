@extends('layouts.signup ')

@section('content')
<section class="font-navbar max-w">
      <div class="bg-main-0 py-36 flex justify-center text-white relative">
        <div class="w-120 overflow-hidden rounded-lg relative text-white">
        <img src="images/bgbg.png" alt="">
        <div class="absolute text-xl text-white top-1/16 left-1/2">
          <h1 class="font-bold text-8xl">Welcome <br>Back</h1>

          <h2 class="font-medium pt-2 pb-6">Please Log In to your account</h2>
          <form class="flex flex-col"action="" method="">
            <label class="pb-2 text-sm" for="Email" class="">Your Email</label>
            <input class="rounded-lg w-80 px-4 py-2" type="text" id="email" name="email" placeholder="example@example.com">
            <label class="py-2 text-sm"for="Password">Password</label>
            <input class="rounded-lg w-80 px-4 py-2" type="password" id="password" name="password" placeholder="example@example.com">

            <div class="flex flex-row py-4">
              <button type="submit" class="w-48 bg-signup-0 rounded-lg py-2">
                <a href="">Login</a>
              </button>

              <div class="px-2">
                <button class="w-30 border-signup-0 border-2 py-2 rounded-lg">
                  <a href="">Sign Up</a>
                </button>
              </div>
              
              

             

            </div>
            <a class="pl-52 pt-2 text-white hover:text-signup-0 text-sm" href="">Forgot possword?</a>
            
          </form>
          <img class="w-80 py-4"src="images/orlog.png" alt="">

          <button class="flex justify-center">
            <img class="pl-32 w-40"src="images/google.png" alt="">
          </button>
        </div>
      </div>
      </div>
    </section>
    
@endsection