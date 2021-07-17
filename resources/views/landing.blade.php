@extends('layouts.main ')

@section('content')
        <!-- Landing -->
        <div class="bg-main-0">
        <div
      style="background-image: url('images/background.png')"
      class="bg-cover h-landing bg-local relative"
    >
      <div
        class="w-full absolute top-0 h-1/2 bg-gradient-to-b from-main-0 z-0"
      ></div>
      <div
        class="w-1/2 absolute h-full top-0 bg-gradient-to-r from-main-0 z-0"
      ></div>

      <div
        class="w-full absolute h-1/2 top-1/2 bg-gradient-to-t from-main-0 z-0"
      ></div>
      <div class="absolute left-20 w-1/3">
        <img src="images/buletsmall.png" alt="" />
      </div>
      <div
        class="
          max-w-7xl
          h-full
          pt-24
          mx-auto
          relative
          flex flex-col
          items-center
        "
      >
        <div class="w-full">
          <img class="w-1/2" src="images/sumunnn.png" alt="" />
        </div>
        <a href="#sponsors" class="pt-44 flex justify-center">
          <img
            class="w-2/3 cursor-pointer animate-bounce"
            src="images/arrow.png"
            alt=""
          />
        </a>
      </div>
    </div>
    <div class="absolute max-w-7xl w-1/3 right-0 top-1/4 opacity-30">
      <img class="" src="images/bigbig2.png" alt="" />
    </div>

    <!-- Sponsors -->

    <div id="sponsors" class="max-w-7xl pt-20 mx-auto relative">
      <h2
        class="text-signup-0 opacity-70 font-navbar text-center text-2xl pb-10"
      >
        Sponsored by
      </h2>
      <!-- <div class="grid grid-rows-2 gap-8 pt-24">
        <div class="grid grid-cols-5 gap-12 justify-items-center">
          <img class="self-center w-1/2" src="coke.png" alt="" />
          <img class="self-center w-1/2" src="shangri.png" alt="" />
          <img class="self-center w-1/2" src="bni.png" alt="" />
          <img class="self-center w-1/2" src="its.png" alt="" />
          <img class="self-center w-1/2" src="coke.png" alt="" />
        </div>
        <div class="grid grid-cols-4 gap-12 justify-center">
          <img class="self-center w-1/2" src="coke.png" alt="" />
          <img class="self-center w-1/2" src="shangri.png" alt="" />
          <img class="self-center w-1/2" src="bni.png" alt="" />
          <img class="self-center w-1/2" src="its.png" alt="" />
        </div>
      </div> -->
      <div class="flex flex-wrap justify-evenly gap-x-10 gap-y-16">
        <img class="self-center w-1/7" src="images/coke.png" alt="" />
        <img class="self-center w-1/7" src="images/shangri.png" alt="" />
        <img class="self-center w-1/7" src="images/bni.png" alt="" />
        <img class="self-center w-1/7" src="images/its.png" alt="" />
        <img class="self-center w-1/7" src="images/coke.png" alt="" />
        <img class="self-center w-1/7" src="images/bni.png" alt="" />
        <img class="self-center w-1/7" src="images/its.png" alt="" />
        <img class="self-center w-1/7" src="images/its.png" alt="" />
        <img class="self-center w-1/7" src="images/its.png" alt="" />
      </div>
    </div>

    <!-- Join Us -->

    <div class="max-w-7xl pt-36 mx-auto relative pb-20">
      <div class="w-1/5">
        <img class="" src="images/joinus.png" alt="" />
      </div>
      <div class="font-sans text-white text-xl pt-8">
        <h2>
          Pendaftaran dibuka <span class="font-bold">15-17 Juni 2021</span>.
          Pilih acara yang ingin diikuti.
        </h2>
      </div>
      <div class="flex gap-14 pt-16">
        <div
          class="
            rounded-2xl
            bg-card-0
            w-1/4
            h-80
            font-sans
            text-white
            flex flex-col
            justify-between
            px-10
            py-12
            gap-y-2
          "
        >
          <div class="font-semibold text-4xl pb-3">
            <h2>Model United</h2>
            <h2>Nations</h2>
          </div>
          <div class="pb-3">
            <img class="w-1/3" src="images/line.png" alt="" />
          </div>
          <div
            class="
              text-xs
              h-1/3
              overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin
              object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0
              pr-5
            "
          >
            <p>
              apa aja boleh ini apa aja sumpah engga ngadi-ngadi terserah deh
              isi apa deskripsi kek apa kek bebas bos lanjot.apa aja boleh ini
              apa aja sumpah engga ngadi-ngadi terserah deh isi apa deskripsi
              kek apa kek bebas bos lanjot.apa aja boleh ini apa aja sumpah
              engga ngadi-ngadi terserah deh isi apa deskripsi kek apa kek bebas
              bos lanjot.apa aja boleh ini apa aja sumpah engga ngadi-ngadi
              terserah deh isi apa deskripsi kek apa kek bebas bos lanjot.apa
              aja boleh ini apa aja sumpah engga ngadi-ngadi terserah deh isi
              apa deskripsi kek apa kek bebas bos lanjot.apa aja boleh ini apa
              aja sumpah engga ngadi-ngadi terserah deh isi
            </p>
          </div>
          <button
            type="button"
            class="
              bg-signup-0
              px-2
              py-1
              text-sm text-white
              font-bold font-navbar
              rounded-full
              self-start
              mt-5
              focus:bg-buttonactive-0
            "
          >
            Register Here!
          </button>
        </div>
        <div
          class="
            rounded-2xl
            bg-card-0
            w-1/4
            h-80
            font-sans
            text-white
            flex flex-col
            justify-between
            px-10
            py-12
            gap-y-2
          "
        >
          <div class="font-semibold text-4xl pb-3">
            <h2>Model United</h2>
            <h2>Nations</h2>
          </div>
          <div class="pb-3">
            <img class="w-1/3" src="images/line.png" alt="" />
          </div>
          <div
            class="
              text-xs
              h-1/3
              overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin
              object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0
              pr-5
            "
          >
            <p>
              apa aja boleh ini apa aja sumpah engga ngadi-ngadi terserah deh
              isi apa deskripsi kek apa kek bebas bos lanjot.apa aja boleh ini
              apa aja sumpah engga ngadi-ngadi terserah deh isi apa deskripsi
              kek apa kek bebas bos lanjot.apa aja boleh ini apa aja sumpah
              engga ngadi-ngadi terserah deh isi apa deskripsi kek apa kek bebas
              bos lanjot.apa aja boleh ini apa aja sumpah engga ngadi-ngadi
              terserah deh isi apa deskripsi kek apa kek bebas bos lanjot.apa
              aja boleh ini apa aja sumpah engga ngadi-ngadi terserah deh isi
              apa deskripsi kek apa kek bebas bos lanjot.apa aja boleh ini apa
              aja sumpah engga ngadi-ngadi terserah deh isi
            </p>
          </div>
          <button
            type="button"
            class="
              bg-signup-0
              px-2
              py-1
              text-sm text-white
              font-bold font-navbar
              rounded-full
              self-start
              mt-5
              focus:bg-buttonactive-0
            "
          >
            Register Here!
          </button>
        </div>
      </div>
    </div>

    <!-- Timeline -->

    <div class="container max-w-7xl mx-auto text-white pt-52 pb-52">
      <div class="content h-timeline">
        <input type="radio" name="slider" checked id="home" />
        <input type="radio" name="slider" id="blog" />
        <div class="list flex flex-col justify-start h-full">
          <label for="home" class="home">
            <i class="fas fa-home"></i>
            <span class="title">Timeline</span>
          </label>
          <label for="blog" class="blog">
            <span class="icon"><i class="fas fa-blog"></i></span>
            <span class="title">Rundown</span>
          </label>

          <div class="slider"></div>
        </div>
        <div class="text-content max-w-4xl relative">
            
          <!-- Timeline Content -->

          <div class="home text relative flex justify-between">
              <div class="absolute mx-auto h-full w-1 bg-gray-400 right-0 left-0 rounded-full ">
              </div>
              <div class="absolute mx-auto h-4 w-4 bg-gray-400 right-0 left-0 rounded-full">

              </div>
              <div class="absolute mx-auto h-4 w-4 bg-gray-400 right-0 left-0 rounded-full top-48">

              </div>
              <div class="absolute mx-auto h-4 w-4 bg-gray-400 right-0 left-0 rounded-full top-full">

              </div>
              <div class="absolute mx-auto h-4 w-4 bg-gray-400 right-0 left-0 rounded-full top-timeline">

              </div>
              <div class="absolute mx-auto h-4 w-4 bg-gray-400 right-0 left-0 rounded-full top-96">

              </div>
              <div class=" h-full w-full flex flex-col justify-items-center pl- pr-8 gap-y-16">
              <div class="w-72 h-36 items-center relative">
                          <div class="relative z-10 font-judul text-3xl font-medium text-center">
                            January
                        </div>
                        <div class="text-center relative z-10 mt-3 font-sans w-5/7 mx-auto">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-3xl z-0 opacity-40">
                          </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-3xl z-0 opacity-40">
                          </div>
              </div>
              <div class="w-72 h-36 items-center relative self-end">
                          <div class="relative z-10 font-judul text-3xl font-medium text-center">
                            February
                        </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-3xl z-0 opacity-40">
                          </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-3xl z-0 opacity-40">
                          </div>
              </div>
              <div class="w-72 h-36 items-center relative">
                          <div class="relative z-10 font-judul text-3xl font-medium text-center">
                            March
                        </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-3xl z-0 opacity-40">
                          </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-3xl z-0 opacity-40">
                          </div>
              </div>
              <div class="w-72 h-36 items-center relative self-end">
                          <div class="relative z-10 font-judul text-3xl font-medium text-center">
                            April
                        </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-3xl z-0 opacity-40">
                          </div>
                          <div class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-3xl z-0 opacity-40">
                          </div>
              </div>
          </div>
              
          </div>

          <!-- Blog Content -->
          <div class="blog text max-w-4xl relative">
          <div class="relative p-5 bg-tablebg-0 rounded-xl">
            <table class="table-fixed w-full border-separate text-white">
              <tbody>
              <tr class=" text-center font-medium font-judul text-3xl h-16">
              <td  class=" bg-time-0 rounded-md w-1/4">Time</td>
              <td class=" bg-timelinebot-0 rounded-md ">Day</td>
              <td class="bg-timelinebot-0 rounded-md">Day</td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">08.00</td>
              <td class=" tablekosong"></td>
              <td rowspan="2" class=" bg-tableisi-0">Webinar AZIK</td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">09.00</td>
              <td class="tablekosong"></td>
              <!-- <td class="">Day</td> -->
              </tr>
              <tr class=" text-center h-12">
              <td class="tabletime">10.00</td>
              <td class=" bg-tableisi-0">Webinar ASHIAP</td>
              <td class=" tablekosong"></td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">11.00</td>
              <td class=" bg-tableisi-0">Webinar ah mantab</td>
              <td class="tablekosong"></td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime ">12.00</td>
              <td class="tablekosong"></td>
              <td class="tablekosong"></td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime ">13.00</td>
              <td rowspan="2" class=" bg-tableisi-0">Webinar AZIK</td>
              <td class=" bg-tableisi-0">Webinar ASHIAP</td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">14.00</td>
              <td class=" bg-tableisi-0">Webinar ah mantab</td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">15.00</td>
              <td class="tablekosong"></td>
              <td class="tablekosong"></td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">16.00</td>
              <td class=" bg-tableisi-0">Webinar ASHIAP</td>
              <td class=" tablekosong"></td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">17.00</td>
              <td class=" bg-tableisi-0">Webinar ah mantab</td>
              <td class=" bg-tableisi-0" rowspan="2">Webinar AZIK</td>
              </tr>
              <tr class=" text-center h-12">
              <td class=" tabletime">18.00</td>
              <td class="tablekosong"></td>
              </tr>
              </tbody>
            </table>
            </div>    
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    
    <footer class="relative">
      <div
        class="bg-gradient-to-t from-footgr-0 absolute w-full h-full opacity-50"
      ></div>
      <div class="grid grid-cols-2 max-w-7xl mx-auto gap-x-20 mt-20 mb-20">
        <div class="flex flex-col">
          <div
            class="
              font-semibold
              text-3xl text-signup-0
              opacity-80
              text-center
              pb-10
            "
          >
            Partnership
          </div>
          <div class="flex flex-wrap gap-x-7 gap-y-5 justify-evenly">
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />

          </div>
        </div>
        <div class="flex flex-col">
          <div
            class="
              font-semibold
              text-3xl text-signup-0
              opacity-80
              text-center
              pb-10
            "
          >
            Partnership
          </div>
          <div class="flex flex-wrap gap-x-7 gap-y-5 justify-evenly">
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
            <img class="self-center w-1/7" src="images/coke.png" alt="" />
          </div>
        </div>
      </div>
      <div
        class="
          flex
          justify-evenly
          items-center
          w-full
          h-60
          pt-20
          max-w-7xl
          mx-auto
          pb-20
          relative
        "
      >
        <div class="h-36 items-center">
          <img class="object-contain" src="images/unknown.png" alt="" />
        </div>
        <div
          class="flex flex-col text-foot-0 font-sans w-1/4 justify-start h-36"
        >
          <div class="font-semibold text-xl pb-6">About</div>
          <div class="text-xs font-thin">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip e
          </div>
        </div>
        <div
          class="flex flex-col text-foot-0 font-sans w-1/6 justify-start h-36"
        >
          <div class="font-semibold text-xl pb-6">About</div>
          <div class="text-xs font-thin">
            Line : @sumunmantap <br />
            Instagram : @surabayamun <br />
            Email : admin@sumun.com
          </div>
        </div>
        <div
          class="flex flex-col text-foot-0 font-sans w-1/6 justify-start h-36"
        >
          <div class="font-semibold text-xl pb-6">About</div>
          <div class="text-xs font-thin">
            Lorem ipsum dolor sit aliqua <br />
            Lorem ipsum dolor
          </div>
        </div>
      </div>
      <hr
        class="block h-0.5 bg-foot-0 opacity-25 rounded-full mx-auto max-w-7xl"
      />
      <div class="flex items-center justify-between mx-auto max-w-7xl relative">
        <div class="text-foot-0 font-thin">SUMUN2021</div>
        <div class="flex justify-evenly items-center">
          <img class="w-1/5" src="images/linef.png" alt="" />
          <img class="w-1/5" src="images/ig.png" alt="" /><img
            class="w-1/5"
            src="images/mail.png"
            alt=""
          />
        </div>
      </div>
    </footer>
    </div>
@endsection