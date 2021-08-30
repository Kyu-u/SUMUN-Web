@extends('layouts.navbarnotlogin ')

@section('content')
<div class="absolute inset-0 flex justify-center h-screen  items-center z-50" id="overlay">
  <div
    class="bg-gradient-to-r from-signup-0 to-tableisi-0 w-2/3 h-2/3 rounded-3xl shadow-2xl px-20 py-14 flex text-white font-sans">
    <div class="flex flex-col items-center w-3/7 h-96 justify-between">
      <div class="bg-adminbox-0 w-60 h-80 rounded-md">

      </div>
      <div class="text-center ">
        Bukti Pembayaran.jpg
      </div>
    </div>
    <div class="flex flex-col items-center justify-between pt-5">
      <div class="flex flex-col overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-thin object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0 pr-56 h-72 text-xl gap-y-5 font-semibold">
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
        <div class="flex flex-wrap">
          Drigo Alexander Sihombing
        </div>
      </div>
      <div class="flex justify-center gap-x-5">
        <button id="modalback" class="border-signup-0 border-2 w-40 rounded-md py-1 font-bold">
          Back
        </button>
        <button class="w-40 rounded-md py-1 bg-signup-0 font-bold">
          Verify
        </button>
      </div>
    </div>
  </div>
</div>
<button id="overlaybtn2" type="button">
  <div class="flex flex-col items-center">
    <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
    <span class="text-white font-sans mt-2 mx-auto">
      BuktiPembayaran.jpg
    </span>
  </div>
</button>
<div class="flex flex-col justify-center container max-w-3xl sm:max-w-7xl md:max-w-7xl mx-auto text-white pt-20 ">
  <h1 class="text-4xl sm:text-6xl  text-center " style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Administration</h1>
      <div class=" h-timeline flex flex-col gap-y-10 items-center lg:items-start lg:flex-row pt-20">
    <input class="rad" type="radio" name="slider" checked id="home" />
    <input class="rad" type="radio" name="slider" id="blog" />
    <div class="list flex flex-col justify-start lg:pl-0 lg:mr-14 w-2/3 lg:w-1/5">
      {{-- <button id="councilbutton" class="relative z-10"> --}}
        <label for="home" class="home flex justify-center border-signup-0 border-2 w-9/10 mx-auto rounded-2xl">
          <span class="title text-sm sm:text-xl font-semibold self-center">Council Form</span>
        </label>
        {{-- </button> --}}
      <button id="verifbutton" class="relative z-10">
        <label for="blog" class="blog flex justify-center border-signup-0 border-2 w-9/10 mx-auto rounded-2xl mt-10">
          <span class="title text-sm sm:text-xl font-semibold self-center justify-self-center">Verification</span>
        </label>
      </button>
      <div id="aboutbutton" class="text-white font-sans text-2xl relative self-center pt-10 flex flex-col">
        <button id="adminbtn" class=" font-semibold self-center inline-flex items-center">
          <span class="mb-1 pr-2">About</span>
          <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <div id="unesco" class=" shadow-lg hidden flex-col z-10 bg-signup-0 p-5 rounded-lg mt-2 gap-5">
          <a href="#">Unesco</a>
          <a href="">Unesco</a>
          <a href="">Unesco</a>
          <a href="">Unesco</a>

        </div>
      </div>
      <div class="slider"></div>
    </div>
    <div class="text-content relative ">

      <!-- Timeline Content -->

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

      <!-- Blog Content -->
      <div class="blog text relative flex justify-center mx-auto w-6/7 h-96 sm:h-97 sm:w-97  md:w-98 lg:w-99">

        <div class="relative w-full h-full rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-10">

          <div class="pt-2 sm:pt-5 flex flex-col lg:flex-row lg:justify-between ">
            <div class="flex flex-wrap h-64 sm:h-72 md:h-80 lg:h-96 gap-10 w-full overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0 whitespace-nowrap pr-1">


              <div class="flex flex-col items-center">
                <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white font-sans mt-2 mx-auto">
                  BuktiPembayaran.jpg
                </span>
              </div>
              <div class="flex flex-col items-center">
                <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white font-sans mt-2 mx-auto">
                  BuktiPembayaran.jpg
                </span>
              </div>
              <div class="flex flex-col items-center">
                <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white font-sans mt-2 mx-auto">
                  BuktiPembayaran.jpg
                </span>
              </div>
              <div class="flex flex-col items-center">
                <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white font-sans mt-2 mx-auto">
                  BuktiPembayaran.jpg
                </span>
              </div>



            </div>




          </div>

        </div>


      </div>
    </div>
</div>
</div>




@endsection