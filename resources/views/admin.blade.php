@extends('layouts.navbarnotlogin ')

@section('content')
<div class="flex flex-col justify-center container max-w-3xl sm:max-w-7xl md:max-w-7xl mx-auto text-white pt-20 pb-52">
<h1 class="text-4xl sm:text-6xl  text-center "style="background: #57CA85;
            background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"">Administration</h1>
      <div class="h-timeline flex flex-col gap-y-10 items-center lg:items-start lg:flex-row pt-20">
        <input class="rad" type="radio" name="slider" checked id="home" />
        <input class="rad" type="radio" name="slider" id="blog" />
        <div class="list flex flex-col justify-start lg:pl-0 lg:mr-14 w-2/3 lg:w-1/5">
          <label for="home" class="home flex justify-center border-signup-0 border-2 w-9/10 mx-auto rounded-2xl">
            <span class="title text-sm sm:text-xl font-semibold self-center">Council Form</span>
          </label>
          <label for="blog" class="blog flex justify-center border-signup-0 border-2 w-9/10 mx-auto rounded-2xl mt-10">
            <span class="title text-sm sm:text-xl font-semibold self-center justify-self-center">Verification</span>
          </label>

          <div class="slider"></div>
        </div>
        <div class="text-content relative ">
            
          <!-- Timeline Content -->

          <div class="home text relative flex justify-center mx-auto w-6/7 h-96 sm:h-97 sm:w-97  md:w-98 lg:w-99">
              
            <div class="relative w-full h-full rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-10">
              <h2 class="text-white font-sans text-sm sm:text-2xl font-semibold">
                Please fill out the form.
              </h2>
              <form action="{{route('regis2')}}" method="POST" class="pt-2 sm:pt-5 flex flex-col">
          @csrf
                <label class="pb-2 text-sm:text-xl text-white"for="Email/Phone">Name</label>
                <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text" id="name" name="name" placeholder="Your Name...">
                <label class="pt-2 pb-2 text-sm:text-xl text-white"for="Email/Phone">Country</label>
                <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text" id="country" name="country" placeholder="Your Country...">
                <label class="pt-2 pb-2 text-sm:text-xl text-white"for="Email/Phone">Council</label>
                <input class="text-black outline-none px-3 w-full lg:w-1/2 rounded-md text-sm py-1 sm:py-4 " type="text" id="council" name="council" placeholder="Your Council...">

                  

                  <a class="self-end pt-2 sm:pt-5" href={{route('signup3')}}>
                    <button type="submit" class="bg-signup-0 text-white text-sm sm:text-xl font-semibold font-sans w-20 sm:w-40 h-10 sm:h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
                      Submit
                    </button>
                  </a>
              </form>
              
            </div>

              
          </div>

          <!-- Blog Content -->
          <div class="blog text relative flex justify-center mx-auto w-6/7 h-96 sm:h-97 sm:w-97  md:w-98 lg:w-99">
              
            <div class="relative w-full h-full rounded-3xl bg-gradient-to-r from-signup-0 to-tableisi-0 p-10">
              
              <form action="{{route('regis2')}}" method="POST" class="pt-2 sm:pt-5 flex flex-col lg:flex-row lg:justify-between ">
          @csrf
              <div class="flex flex-wrap h-64 sm:h-72 md:h-80 lg:h-96 gap-10 w-full lg:w-1/2 overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0 whitespace-nowrap">
              
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
              <div class="flex flex-col items-center">
                <div class="w-20 lg:w-32 h-24 lg:h-40 bg-adminbox-0 rounded-xl"></div>
                <span class="text-white font-sans mt-2 mx-auto">
                    BuktiPembayaran.jpg
                  </span>
              </div>
            
              
              
              </div>
              <a class="pt-6 lg:hidden" href={{route('signup3')}}>
                    <button type="submit" class="bg-signup-0 mx-auto text-white text-sm sm:text-xl font-semibold font-sans w-20 sm:w-40 h-10 sm:h-14 rounded-md self-center flex justify-center items-center">
                      Submit
                    </button>
                  </a>
                
                <div class="flex flex-col hidden lg:block w-1/2 justify-between text-center">
                <div class="flex flex-col items-center">
                  <div class="w-52 h-60 bg-adminbox-0 rounded-xl ">

                  </div>
                  <span class="text-white font-sans mt-2 ">
                    BuktiPembayaran.jpg
                  </span>
                  </div>
                <a class="pt-6" href={{route('signup3')}}>
                    <button type="submit" class="bg-signup-0 mt-10 mx-auto text-white text-sm sm:text-xl font-semibold font-sans w-20 sm:w-40 h-10 sm:h-14 rounded-md self-center flex justify-center items-center">
                      Submit
                    </button>
                  </a>
                </div>
                  
              </form>
              
            </div>

              
          </div>
        </div>
      </div>
    </div>
    @endsection
