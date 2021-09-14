@extends('layouts.navbarnotlogin ')

@section('content')
<section class="font-navbar bg-main-0 text-white py-10">
  <div class="max-w-7xl mx-auto flex justify-center">
    <div class="flex flex-row">
      <a href="">
        <img class="w-1/2 hidden md:block" src="images/back.png" alt="">
      </a>
      <div class="flex flex-col px-10 sm:px-0">
        <p class="text-xl flex flex-row items-center md:block text-sm md:text-md"> <img
            class="block md:hidden w-12 pr-6 self-center" src="images/back.png" alt=""> </p>

        <h1 class="text-5xl md:text-6xl mt-10" style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Message has<br class=" block md:hidden"> been sent!</h1>
        <p class=" pt-8 md:pt-4 text-xs md:text-xl">
          An email with a link to reset your password has been sent.
        </p>

        <p class="text-xs pt-12 font-thin">*Didn't get the email?</p>
        <form action="{{route('emailpassword')}}">
          <input name="email" type="hidden" value="{{$email}}">
          <button type="submit" class="flex justify-start pt-4">
            <div class="w-auto bg-signup-0 rounded-md py-2 px-8">
              <p>Resend</p>
            </div>

          </button>
        </form>

      </div>
    </div>
  </div>
</section>

@endsection