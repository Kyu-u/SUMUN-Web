@extends('layouts.signup ')

@section('content')
<section class="font-navbar bg-main-0 text-white py-32">
      <div class="max-w-7xl mx-auto flex justify-center">
        <div class="flex flex-row">
          <a href="">
            <img class="w-1/2" src="images/back.png" alt="">
          </a>
          <div class="flex flex-col">
            <p class="text-xl">Back to main page</p>

            <h1 class="text-6xl mt-14"style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Forgot your pasword?</h1>
            <p class="pt-4">
              Enter the email address that you used to register. <br>
We’ll send you and email with a link to reset your password.
            </p>

<form class="flex flex-col py-10"action="" method="">
  <label class="pb-2 text-sm" for="Email" class="">Your Email</label>
  <input class="rounded-lg md:w-60 2xl:w-96 px-4 py-2 md:text-sm 2xl:text-xl" type="text" id="email" name="email" placeholder="example@example.com">
  </form>

  <button class="flex justify-center ">
  
<div class="w-auto bg-signup-0 rounded-md py-2 px-8">
  <p>Send</p>
</div>
  
  </button>
          </div>
        </div>
      </div>
    </section>

    @endsection