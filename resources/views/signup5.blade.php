@extends('layouts.navbarnotlogin ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20 px-5">
  <div class=" md:w-8xl relative flex justify-center overflow-hidden p-5 md:p-0">
    <img id="myImg" class="h-98 md:h-auto" src="images/bgbg.png" alt="">
    <div
      class="flex text-white text-base md:text-xl font-semibold font-sans gap-x-5 items-center absolute top-10 md:top-14 left-10 md:left-14 ">
      <button><img class=" w-4 h-4 md:w-8 md:h-8 " src="images/back.png" alt=""></button>
      Back
    </div>
    <div class="absolute p-10 lg:p-16 flex flex-col md:right-0 top-0 w-full md:w-1/2 pt-20 md:pt-0  mt-6 md:mt-0 ">
      <div class="text-white font-sans font-semibold text-3xl md:text-4xl ">
        Create a <br> New Account
      </div>
      <div class="text-white font-sans font-semibold text-xl md:text-3xl pt-4">
        Undergraduate
      </div>

      @if ($errors->any())
      <div class="alert alert-danger text-white pt-2">
        <ul>
          @foreach ($errors->all() as $error)
          <li>*{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form method="POST" action="{{ route('regis5') }}" class=" pt-5 flex flex-col">
        @csrf
        <label class="pb-2 pt-2 text-base md:text-xl text-white" for="university">University</label>
        <input class=" outline-none px-3 w-full md:h-10 lg:h-auto lg:w-96  rounded-md text-sm py-4 " type="text"
          id="university" name="university" placeholder="Your University...">
        <label class="pb-2 pt-2 text-base md:text-xl text-white" for="yearofclass">Year Of Class</label>
        <select
          style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;"
          class="drop w-full lg:w-96 md:h-10 lg:h-auto border bg-white rounded px-3 py-4 outline-none relative"
          name="grade">
          <option value="2018" class="py-1 font-sans">2018</option>
          <option value="2019" class="py-1 font-sans">2019</option>
          <option value="2020" class="py-1 font-sans">2020</option>
          <option value="2021" class="py-1 font-sans">2021</option>
          <img class="absolute right-4" src="images/droparrow.png" alt="">
        </select>
        <label class="pb-2 pt-2 text-base md:text-xl text-white" for="univmajor">Major</label>
        <input class=" outline-none px-3 w-full md:h-10 lg:h-auto lg:w-96 rounded-md text-sm py-4 " type="text"
          id="univmajor" name="major" placeholder="Your Major...">

          <label class="pb-2 pt-2 text-base md:text-xl text-white" for="experience">MUN Experience</label>
        <select
          style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;"
          class="drop w-full lg:w-96 md:h-10 lg:h-auto border bg-white rounded px-3 py-4 outline-none relative"
          name="experience" for="experience">
          <option class="py-1 font-sans" value="Beginner">Beginner</option>
          <option class="py-1 font-sans" value="Intermediate">Intermediate</option>
          <option class="py-1 font-sans" value="Advanced">Advanced</option>
          <option class="py-1 font-sans" value="Expert">Expert</option>
          <!-- <img class="absolute right-4" src="images/droparrow.png" alt=""> -->
        </select>

        <div class="flex justify-between w-full pt-5 lg:w-96">

          <div class="flex text-white text-base md:text-xl font-semibold font-sans gap-x-5 items-center">
            <button type="button" onclick="javascript:history.back()"><img class=" w-4 h-4 md:w-8 md:h-8 "
                src="images/back.png" alt=""></button>
            Back
          </div>

          <button type="submit"
            class="bg-signup-0 text-white text-md md:text-xl font-semibold font-sans w-20 h-7 md:w-30 md:h-10 lg:w-40 lg:h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
            Submit
          </button>

        </div>
      </form>





    </div>
  </div>
</div>


@endsection