@extends('layouts.adminnav ')
@section('content')
<div class="flex flex-col items-center">
  <h1 class="text-4xl sm:text-6xl pb-20 text-center " style="background: #57CA85;
    background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Administration</h1>
  <div class="home text relative flex justify-center mx-auto w-6/7 h-96 sm:h-97 sm:w-97  md:w-98 lg:w-99">

    <div class="relative w-full h-full flex-1 rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-10">


      <form action="{{route('regis2')}}" method="POST" class="pt-2 sm:pt-5 flex flex-row ">
        @csrf
        <div class="flex flex-col items-start w-3/7">


          <div class="mt-5 flex flex-col text-xl gap-7 overflow-y-scroll items-center h-64 sm:h-72 md:h-80 lg:h-80  scrollbar-thumb-rounded-full scrollbar-thin object-contain
                  scrollbar-track-main-0 scrollbar-thumb-signup-0 pr-10">
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>
            <div class="flex-wrap"> Drigo Alexander Sihombing</div>

          </div>
        </div>
        <div class="flex flex-col w-4/7">
          <h2 class="text-white font-sans text-sm sm:text-2xl font-semibold">
            Please fill out the form.
          </h2>
          <label class="pb-2 text-sm:text-xl text-white" for="Email/Phone">Name</label>
          <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text"
            id="name" name="name" placeholder="Your Name...">
          <label class="pt-2 pb-2 text-sm:text-xl text-white" for="Email/Phone">Country</label>
          <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text"
            id="country" name="country" placeholder="Your Country...">
          <label class="pt-2 pb-2 text-sm:text-xl text-white" for="Email/Phone">Council</label>
          <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text"
            id="council" name="council" placeholder="Your Council...">



          <a class="self-end pt-2 sm:pt-5" href={{route('signup3')}}>
            <button type="submit"
              class="bg-signup-0 text-white text-sm sm:text-xl font-semibold font-sans w-20 sm:w-40 h-10 sm:h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
              Submit
            </button>
          </a>
        </div>


      </form>


    </div>


  </div>

  <div class="flex items-center pb-10 text-white md:hidden">
    <select
      style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;"
      class="drop w-30 lg:h-auto border bg-gray-600 bg-opacity-20 rounded-xl border-none rounded px-3 py-4 outline-none relative"
      name="grade" for="grade">
      <option class="py-1 font-sans">Unesco</option>
      <option class="py-1 font-sans">Unesco</option>
      <option class="py-1 font-sans">Unesco</option>


    </select>
    <button class="bg-signup-0 bg-opacity-80 rounded-md w-14 ml-5 h-10 shadow-sm" type="button"
      value="Filter">Filter</button>
  </div>

  <div class="relative flex justify-center mx-auto w-6/7 h-80 sm:h-97 sm:w-97  md:w-98 lg:w-99">

    <div
      class="relative w-full h-full flex-1 rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-5 md:p-10 text-white">


      <form action="{{route('adminAssign')}}" method="GET" class="pt-2 sm:pt-5 flex flex-row ">
        @csrf
        <div class="md:flex flex-col hidden items-start  w-3/7">
          <div class="w-full flex items-center">
            <select
              style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;"
              class="drop w-30 lg:h-auto border bg-black bg-opacity-20 rounded-xl border-none rounded px-3 py-4 outline-none relative"
              name="term" for="grade">
              <option class="py-1 font-sans" value="UNDP">UNDP</option>
              <option class="py-1 font-sans" value="UNEP">UNEP</option>
              <option class="py-1 font-sans" value="UNSC">UNSC</option>
            </select>
            <button class="bg-signup-0 bg-opacity-80 rounded-md w-14 ml-5 h-10 shadow-sm" type="submit">Filter</button>
          </div>
      </form>
      <div class="mt-5 flex flex-col text-xl gap-7 overflow-y-scroll items-center h-64 sm:h-72 md:h-80 lg:h-80  scrollbar-thumb-rounded-full scrollbar-thin object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0 pr-10">
        @foreach($users as $user)
        {{$user->username}}
        @endforeach
        <div class="">
          <form action="{{route('assignCountry')}}" method="POST" class="pt-2 sm:pt-5 flex flex-row ">
            @csrf
            <div class="flex flex-col w-full md:w-4/7 md:pl-5">
              <h2 class="text-white font-sans text-sm sm:text-2xl font-semibold">
                Please fill out the form.
              </h2>
              <label class="pb-2 text-sm:text-xl text-white" for="Email/Phone">Username</label>
              <input class="text-black outline-none px-3 w-full rounded-md text-sm py-1 sm:py-4 " type="text"
                id="username" name="username" placeholder="Your Name...">
              <label class="pt-2 pb-2 text-sm:text-xl text-white" for="Email/Phone">Country</label>
              <input class="text-black outline-none px-3 w-full  rounded-md text-sm py-1 sm:py-4 " type="text"
                id="country" name="country" placeholder="Your Country...">
              <button type="submit"
                class="bg-signup-0 text-white text-sm sm:text-xl font-semibold font-sans w-20 sm:w-40 h-10 sm:h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>



  </div>


</div>

<div
  class="bg-gradient-to-r from-signup-0 to-tableisi-0 p-5 md:hidden rounded-3xl text-white mt-10 w-6/7 md:w-98 sm:w-97">
  <div class="mt-5 flex flex-col text-xl gap-7 overflow-y-scroll items-center h-44  scrollbar-thumb-rounded-full scrollbar-thin object-contain 
    scrollbar-track-main-0 scrollbar-thumb-signup-0 pr-10">
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
    <div class="flex-wrap"> Drigo Alexander Sihombing</div>
  </div>
</div>

</div>
@endsection