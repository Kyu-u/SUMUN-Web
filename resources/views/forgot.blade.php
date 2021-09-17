@extends('layouts.navbarnotlogin ')

@section('content')
<section class="font-navbar bg-main-0 text-white py-32">
  <div class="max-w-7xl mx-auto flex justify-center">
    <div class="flex flex-row">
      <!-- <a href="">
          <img class="w-1/2 hidden md:block" src="images/back.png" alt="">
        </a> -->
      <div class="flex flex-col px-10 sm:px-0">
        <p class="text-xl flex flex-row items-center md:block text-sm md:text-md"> <img
            class="block md:hidden w-12 pr-6 self-center" src="images/back.png" alt=""> Back to main page</p>

        <h1 class="text-6xl mt-14" style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Forgot your <br class=" block md:hidden"> password?</h1>
        <p class=" pt-8 md:pt-4 text-xs md:text-xl">
          Enter the email address that you used to register. <br>
          We’ll send you and email with a link to reset your password.
        </p>
        <div class="flex flex-col w-full md:w-1/2 pt-6 md:pt-0">
          <form class="flex flex-col py-10" action="{{route('emailpassword')}}" method="POST">
            @csrf
            <label class="pb-2 text-xs nd:text-sm" for="Email" class="">Your Email</label>
            <input class="rounded-lg md:w-full px-4 py-2 text-sm md:text-sm  text-xl text-black" type="text" id="email"
              name="email" placeholder="example@example.com">
            <button class="flex justify-end items-end pt-4">
              <a href="forgot2.html" type="submit">
                <div class="w-auto bg-signup-0 rounded-md py-2 px-8">
                  <p>Send</p>
                </div>
              </a>
            </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection