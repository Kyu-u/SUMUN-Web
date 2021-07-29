@extends('layouts.signup ')

@section('content')

<section class="font-navbar bg-main-0 text-white py-32">
    <div class="max-w-7xl mx-auto flex justify-center">
      <div class="flex flex-row">
        <a href="">
          <img class="w-1/2 hidden md:block" src="images/back.png" alt="">
        </a>
        <div class="flex flex-col px-20 sm:px-0">
          <p class="text-xl flex flex-row items-center md:block text-sm md:text-md"> <img class="block md:hidden w-12 pr-6 self-center"src="images/back.png" alt=""> </p>
                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
          <h1 class="text-6xl mt-14" style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Password Reset</h1>
            <p class=" pt-8 md:pt-4 text-xs md:text-xl">
            Enter your new password on the box below!
            </p>
            <div class="flex flex-col w-full md:w-2/3 pt-6 md:pt-0">
              <form class="flex flex-col py-10" action="{{ route('reset.password.post') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}"/>
                <label class="pb-2 text-xs nd:text-sm" for="Email" class="">New Password</label>
                <input class="rounded-lg md:w-full px-4 py-2 text-sm md:text-sm  text-xl text-black" type="password" id="password" name="password"
                  placeholder="*******">
                  <label class="pb-2 text-xs nd:text-sm pt-6" for="Email" class="">Confirm new password</label>
                <input class="rounded-lg md:w-full px-4 py-2 text-sm md:text-sm  text-xl text-black" type="password" id="password_confirmation" name="password_confirmation"
                placeholder="*******">
                <button type="submit" class="flex justify-end items-end">

                  <div class="w-auto bg-signup-0 rounded-md py-2 px-8">
                    <p>Submit</p>
                  </div>
  
                </button>
              </form>

            </div>
        </div>
      </div>
    </div>
  </section>

    @endsection