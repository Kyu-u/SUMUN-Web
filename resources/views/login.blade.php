@extends('layouts.signup ')

@section('content')
<section class="font-navbar ">
  <div class="bg-main-0 py-36 flex justify-center text-white relative grid grid-cols-1 px-60">
    <div class="grid-span-1 overflow-hidden rounded-lg relative text-white max-w-7xl min-w-min mx-auto">
      <img src="images/bgbg.png" alt="">
      <div class="absolute text-xl text-white top-1/16 left-1/2">
        <h1 class="font-bold lg:text-5xl xl:text-8xl">Welcome <br>Back</h1>

        <h2 class="font-medium pt-2 pb-6 lg:text-sm xl:text-2xl">Please Log In to your account</h2>
        @foreach ($errors->all() as $error)
        {{ $error }}<br />
        @endforeach
        <form class="flex flex-col" action="{{ route('login.post') }}" method="post">
          @csrf
          <label class="pb-2 text-sm" for="Email" class="">Your Email</label>
          <input class="rounded-lg lg:w-60 xl:w-96 px-4 py-2 lg:text-sm xl:text-xl" type="text" id="email" name="email"
            placeholder="example@example.com">
          <label class="py-2 text-sm" for="Password">Password</label>
          <input class="rounded-lg lg:w-60 xl:w-96 px-4 py-2 lg:text-sm xl:text-xl" type="password" id="password"
            name="password" placeholder="example@example.com">

          <div class="flex flex-row pt-6">
            <button type="submit" class="lg:w-36 xl:w-56 bg-signup-0 rounded-lg py-1 lg:text-sm xl:text-xl">
              Login
            </button>

            <div class="px-4">
              <button class="lg:w-20 xl:w-36 border-signup-0 border-2 py-1 rounded-lg lg:text-sm xl:text-xl">
                <a href="{{ route('signup1') }}">Sign Up</a>
              </button>
            </div>
          </div>
          <a class="lg:pl-36 xl:pl-70  text-white hover:text-signup-0 lg:text-xs xl:text-sm pt-4" href="">Forgot
            password?</a>

        </form>
        <img class="lg:w-60 xl:w-96 py-6 pt-10" src="images/orlog.png" alt="">

        <button class="">
          <img class="xl:pt-2 lg:mx-26 xl:mx-44 lg:w-7 xl:w-10" src="images/google.png" alt="">
        </button>
      </div>
    </div>
  </div>
</section>

@endsection