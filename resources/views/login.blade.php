@extends('layouts.navbarnotlogin ')

@section('content')
{{-- <img class="absolute top-0 z-10" src="images/batik.png" alt=""> --}}
<section class="font-navbar ">
  <div class="bg-main-0 py-36 flex justify-center text-white relative grid grid-cols-1">
    <div
      class="grid-span-1 overflow-hidden rounded-lg relative text-white max-w-7xl min-w-min w-3/4  md:w-2/3 lg:w-3/4 mx-auto">
      <img class="flex md:hidden" src="images/bgbgm.png" alt="">
      <img class="hidden md:flex" src="images/bgbg.png" alt="">

      <div
        class="absolute p-5 md:p-10 lg:p-16 flex flex-col md:right-0 top-0 w-full md:w-1/2 pt-10 md:pt-10 mt-6 md:mt-0 min-w-min">
        <h1 class="font-bold text-base go:text-2xl md:text-lg lg:text-5xl xl:text-8xl">Welcome <br>Back</h1>

        <h2 class="font-medium pt-2 pb-2 lg:pb-6 text-xs md:text-xs xl:text-2xl">Please Log In to your account</h2>
        @if ($errors->any())
        <p class="text-white pb-5">*{{$errors->first()}}<br></p>
        @endif
        <form class="flex flex-col" action="{{ route('login.post') }}" method="post">
          @csrf
          <label class="pb-2 text-xs lg:text-sm" for="Email" class="">Your Email</label>
          <input
            class="text-black rounded-lg w-full  lg:w-60 xl:w-96 h-6 go:h-10 md:h-6 lg:h-8 px-4 py-2 text-xs md:text-sm xl:text-xl mr-10 md:m-0"
            type="text" id="email" name="email" placeholder="example@example.com">
          <label class="py-2 text-xs lg:text-sm" for="Password">Password</label>
          <input
            class="text-black rounded-lg w-full lg:w-60 xl:w-96 h-6 go:h-10 md:h-6 lg:h-8 px-4 py-2 text-xs md:text-sm xl:text-xl mr-10 md:m-0"
            type="password" id="password" name="password" placeholder="******">

          <div class="flex flex-row pt-2 pt-3 lg:pt-6">
            <button type="submit"
              class="w-10 flex-1 lg:flex-initial ip:w-16 md:w-24 lg:w-36 xl:w-56 h-6 go:h-8 md:h-6 lg:h-8 bg-signup-0 rounded-lg text-xs lg:text-sm xl:text-xl">
              Login
            </button>

            <button
              class="w-16 ip:w-16 lg:w-20 xl:w-36 h-6  go:h-8 md:h-6 lg:h-8 border-2 border-signup-0 rounded-lg  text-xs lg:text-sm xl:text-xl ml-4 flex-1 md:flex-initial">
              <a href="{{ route('signup1') }}">Sign Up</a>
            </button>
          </div>
          <a class="lg:pl-36 xl:pl-70  text-white hover:text-signup-0 text-xs xl:text-sm pt-4"
            href="{{route('forgot')}}">Forgot
            password?</a>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection