@extends('layouts.landingnavbar')

@section('content')
<!-- Landing -->
<div class="bg-main-0 md:p-0 z-0">
    <div style="background-image: url('images/background.png')" class="bg-cover h-landing bg-local  relative">
        <div class="w-full absolute top-0 h-1/2 bg-gradient-to-b from-main-0 z-0"></div>
        <div class="w-1/2 absolute h-full top-0 bg-gradient-to-r from-main-0 z-0"></div>

        <div class="w-full absolute h-1/2 top-1/2 bg-gradient-to-t from-main-0 z-0"></div>
        <div class="absolute left-20 w-1/3">
            <img src="https://res.cloudinary.com/varkyu/image/upload/v1631439585/buletsmall_sunvx5.png" alt="" />
        </div>
        <div class="
          max-w-3xl ip:max-w-lg md:max-w-7xl
          h-full
          pt-10
          go:pt-24
          mx-auto
          relative
          flex flex-col
          items-center
        ">
            <div data-aos="fade-right" data-aos-duration="2000" class="w-full">
                <img class="pl-10 mx-auto go:mx-0 w-6/7 md:w-1/2 object-contain "
                    src="https://res.cloudinary.com/varkyu/image/upload/v1631439600/sumunnn_ze7ayi.png"
                    alt="Surabaya Model United Nations Title" />
            </div>
            <a href="#sponsors" class="pt-40 ip:pt-64 go:pt-44 flex justify-center">
                <img class="w-1/3 ip:w-2/3 cursor-pointer animate-bounce"
                    src="https://res.cloudinary.com/varkyu/image/upload/v1631439605/arrow_wvcb4e.png" alt="" />
            </a>
        </div>
    </div>
    <div class="absolute max-w-7xl w-1/3 right-0 top-1/4 opacity-30">
        <img class="" src="https://res.cloudinary.com/varkyu/image/upload/v1631439600/bigbig2_cnf8zb.png" alt="" />
    </div>

    <!-- Sponsors -->

    <div id="sponsors" class="max-w-5xl lg:max-w-7xl pt-20 mx-auto relative">
        <h2 class="text-signup-0 opacity-70 font-navbar text-center md:text-4xl font-semibold lg:text-6xl pb-10">
            No Sponsors Yet
        
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

    </div>

    <!-- Join Us -->

    <div class="max-w-7xl pt-36 mx-auto relative go:pb-20">
        <div data-aos="fade-right" data-aos-duration="2000" class="w-1/5 mx-auto md:mx-0">
            <img class="" src="https://res.cloudinary.com/varkyu/image/upload/v1631439591/joinus_knd6p1.png" alt="" />
        </div>
        <div data-aos="fade-right" data-aos-duration="2000"
            class="font-judul text-center md:text-left text-white text-sm px-4 go:px-0 go:text-xl pt-8">
            <h2>
                Registration is now open, Don't miss it!
            </h2>
        </div>
        <div class="flex flex-col md:flex-row gap-14 pt-16">
            <div data-aos="fade-right" data-aos-duration="2000" class="
            rounded-2xl
            bg-card-0
            w-6/7 md:w-1/3 mx-auto md:mx-0
            font-judul
            text-white
            flex flex-col
            justify-between
            h-80 md:h-97
            p-8
            gap-y-2
          ">
                <div class="font-semibold text-xl md:text-4xl pb-3">
                    <h2>Model United</h2>
                    <h2>Nations</h2>
                </div>
                <div class="pb-3">
                    <img class="w-1/3" src="https://res.cloudinary.com/varkyu/image/upload/v1631439591/line_ogdu4t.png"
                        alt="" />
                </div>
                <div class="
              text-xs md:text-sm
              h-1/2
              overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin
              object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0
              pr-5
            ">
                    <p>
                        In this year event, Surabaya Model United Nations brings "The Projection of Global Societies:
                        Mobilizing Contemporary Technological Discourses" as our Grand Theme. In a span of decades, the
                        world has experienced rapid changes and development in global societies, which in dynamic
                        increases global challenges. Therefore, it lies on the hands of the current youth and future
                        generations to mobilize contemporary ideas and discourses to resolve the ever growing global
                        challenges. With the rapid technological advancements, the youths bear the potential to
                        undertake challenges through the utilization of technologies.
                </div>
                <div class="flex flex-row justify-between mt-5 md:mt-0 items-center">
                    @if (Auth::check())
                    <a href="{{route('registMUN')}}" class="
                    bg-signup-0
            px-2
            py-1
            text-sm text-white
            font-bold font-navbar
            rounded-full
            self-start
            focus:bg-buttonactive-0
              
            " >
                      Register Here
                    </a>

                    @else

                    <a href="{{route('signup1')}}" class="
                    bg-signup-0
            px-2
            py-1
            text-sm text-white
            font-bold font-navbar
            rounded-full
            self-start
            focus:bg-buttonactive-0
          " >
                        Register Here!
                    </a>

                    @endif

                    <p class="text-white flex justify-center
                    items-center text-xs md:text-sm lg:text-lg font-semibold">Rp 100.000,00</p>
                </div>


            </div>
            <div data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300" class="
            rounded-2xl
            bg-card-0
            w-6/7 md:w-1/3 mx-auto md:mx-0
            font-judul
            text-white
            flex flex-col
            justify-between
            h-80 md:h-97
            p-8
            gap-y-2
          ">
                <div class="font-semibold text-xl md:text-4xl pb-3">
                    <h2>Pre-Event</h2>
                </div>
                <div class="pb-3">
                    <img class="w-1/3" src="https://res.cloudinary.com/varkyu/image/upload/v1631439591/line_ogdu4t.png"
                        alt="" />
                </div>
                <div class="
              text-xs md:text-sm
              h-1/2
              overflow-y-scroll
              scrollbar-thumb-rounded-full scrollbar-thin
              object-contain
              scrollbar-track-main-0 scrollbar-thumb-signup-0
              pr-5
            ">
                    <p class="text-justify">
                        Today, the number of people looking for jobs exceeds the number of
                        vacancies available. This situation is faced by all types of job seekers, including fresh
                        graduates. Human Resources (HR) relies on Curriculum Vitae (CV) and interviews as one of their
                        filters to find the best candidates. Therefore, a good CV and interview session is necessary if
                        someone wants to be a stand-out candidate. We are eager to learn and show our members how to
                        make a good CV and win an interview from the HR recruiter’s perspective directly.
                        We acknowledge this is an important thing to be discussed since there is much information on the
                        recruitment process especially on how to make a good CV and win an interview that contradict
                        each other. In order to straighten perspective and upgrade insights on this topic, we have
                        decided to help out the young generation by organizing a webinar. We believe that the speaker we
                        have chosen would be able to provide new insights and make us better prepared seeking a job in
                        the future.
                </div>
                <div class="flex justify-between items-center mt-5 md:mt-0">
                    @if (Auth::check())
                    <a href="{{route('registMUN')}}" class="
              bg-signup-0
              px-2
              py-1
              text-sm text-white
              font-bold font-navbar
              rounded-full
              self-start
              focus:bg-buttonactive-0
            ">
                        Register Here!
                    </a>

                    @else

                    <a href="{{route('signup1')}}" class="
            bg-signup-0
            px-2
            py-1
            text-sm text-white
            font-bold font-navbar
            rounded-full
            self-start
            focus:bg-buttonactive-0
          ">
                        Register Here!
                    </a>

                    @endif

                    <p class="text-white text-xs md:text-sm lg:text-lg font-semibold">FREE!</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Timeline -->

    <div id="timeline" data-aos="fade-up" data-aos-duration="2000"
        class="container  md:max-w-7xl mx-auto text-white pt-20 go:pt-52 pb-20 go:pb-52">
        <div class="h-timeline flex flex-col items-center md:items-start md:flex-row overflow-y-scroll 
        scrollbar-thumb-rounded-full scrollbar-thin
        object-contain
        scrollbar-track-main-0 scrollbar-thumb-signup-0">
            <input class="hidden" type="radio" name="slider" checked id="home" />
            <input class="hidden" type="radio" name="slider" id="blog" />
            <div class="list flex flex-col justify-start md:mr-20 h-full">
                <label for="home" class="home landing flex justify-center px-5">
                    <span class="title">Rundown</span>
                </label>
                <label for="blog" class="blog landing flex justify-center px-5">
                    <span class="title">Timeline</span>
                </label>

                <div class="slidera"></div>
            </div>
            <div class="text-content max-w-4xl relative ">

                <!-- Timeline Content -->

                <div class="home text relative flex justify-between
                ">
                    <div class="relative p-5 bg-tablebg-0 rounded-xl">
                        <table class="table-fixed w-full border-separate text-white">
                            <tbody>
                                <tr class=" text-center font-medium font-judul text-lg md:text-3xl h-16">
                                    <td class=" bg-time-0 rounded-md w-1/5">Time</td>
                                    <td class=" bg-timelinebot-0 rounded-md ">Day - 1</td>
                                    <td class=" bg-time-0 rounded-md w-1/5">Time</td>
                                    <td class="bg-timelinebot-0 rounded-md">Day - 2</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime">09.00 - 09.30</td>
                                    <td class=" bg-tableisi-0">Opening</td>
                                    <td class=" tabletime">10.00 - 12.00</td>

                                    <td class=" bg-tableisi-0 ">Comses 4</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime">10.00 - 10.30</td>
                                    <td class="bg-tableisi-0">Comses 1</td>
                                    <td class=" tabletime">12.00 - 12.30</td>

                                    <td class="bg-tableisi-0">Break</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class="tabletime">12.00 - 12.30</td>
                                    <td class=" bg-tableisi-0">Break</td>
                                    <td class=" tabletime">12.30 - 14.00</td>

                                    <td class=" bg-tableisi-0">Comses 5</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime">12.30 - 14.00</td>
                                    <td rowspan="2" class=" bg-tableisi-0">Comses 2</td>
                                    <td rowspan="2" class=" tabletime">14.30 - 15.00</td>

                                    <td rowspan="2" class="bg-tableisi-0">Games and Feedback</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime ">14.00 - 14.30</td>
                                    <!-- <td class="tablekosong"></td> -->

                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime ">14.30 - 14.45</td>
                                    <td class=" bg-tableisi-0">Break</td>
                                    <td class=" tabletime">18.30 - 19.50</td>

                                    <td class="bg-tableisi-0">Closing</td>
                                </tr>
                                <tr class=" text-center h-6 text-xs md:text-md md:h-12">
                                    <td class=" tabletime ">14.45 - 16.45</td>
                                    <td class=" bg-tableisi-0">Comses 3</td>
                                    <td class=" tablekosong"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- Blog Content -->
                <div class="blog text max-w-4xl relative">
                    <div class="absolute mx-auto h-full w-0.5 md:w-1 bg-gray-400 right-0 left-0 rounded-full ">
                    </div>
                    <div class="absolute mx-auto h-2 w-2 md:h-4 md:w-4 bg-gray-400 right-0 left-0 rounded-full">

                    </div>
                    <div class="absolute mx-auto h-2 w-2 md:h-4 md:w-4 bg-gray-400 right-0 left-0 rounded-full top-48">

                    </div>
                    <div
                        class="absolute mx-auto h-2 w-2 md:h-4 md:w-4 bg-gray-400 right-0 left-0 rounded-full top-full">

                    </div>
                    <div
                        class="absolute mx-auto h-2 w-2 md:h-4 md:w-4 bg-gray-400 right-0 left-0 rounded-full top-timeline">

                    </div>
                    <div class="absolute mx-auto h-2 w-2 md:h-4 md:w-4 bg-gray-400 right-0 left-0 rounded-full top-96">

                    </div>
                    <div class=" h-full w-full flex flex-col justify-items-center md:pr-8 gap-y-16 ">
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                13 September
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                MUN Open Early Registration
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative self-end">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                1 October
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                MUN Open Regular Registration
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                22 October
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                MUN Open Late Registration
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative self-end">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                2 October
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                Pre-Event <br> Tackling the Recruitment Process
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                13 November
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                MUN Day-1
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                        <div class="w-28 h-24 go:w-48 go:h-32 md:w-72 md:h-36 items-center relative self-end">
                            <div
                                class="relative z-10 font-judul  text-base pt-1 md:text-lg lg:text-3xl font-medium text-center">
                                14 November
                            </div>
                            <div
                                class="text-center flex items-center justify-center text-xs md:text-lg relative z-10 mt-4 md:mt-0 lg:mt-3 font-judul w-5/7 mx-auto">
                                MUN Day-2
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-bl from-timelinetop-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                            <div
                                class="w-full h-full absolute top-4 justify-self-center bg-gradient-to-tr from-timelinebot-0 rounded-md md:rounded-3xl z-0 opacity-40">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="relative">
        <div class="bg-gradient-to-t from-footgr-0 absolute w-full h-full opacity-50"></div>
        <h2 class="text-center text-lg text-signup-0 font-semibold opacity-80">Partnership & Media Partner</h2>
        <div class="grid grid-cols-1 max-w-7xl mx-auto md:gap-x-20 mt-8 go:mt-20 mb-20">
            <div class="flex flex-col">
                {{-- <div class="
              font-semibold
              text-lg md:text-3xl text-signup-0
              opacity-80
              text-center
              pb-10
              hidden
              go:flex
              justify-center
            ">
                    Partnership
                </div> --}}
                <div class="flex flex-wrap gap-x-7 gap-y-5 justify-evenly">
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631376162/Logo_ALSA_EChall-removebg-preview_patfno.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631376163/VETAMUN_Logo-removebg-preview_kk2gh3.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631376311/FIMUN_1_1_thsdbk.png" alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631376332/FPCI_UI_MUN_1_1_mulvsu.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631376380/ALSA_EFEST_MUN_LOGO_lwamfu.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631377440/Logo_Radio_PPI_Dunia_1_av0puo.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631377453/PresMUN_Logo_1_hxnmos.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631378199/UUMUN_Logo_2_2_uabb2o.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631443828/Rev_Transparant_PPIDK_ASIANIA_1_ub8q7t.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631443904/Logo_MainMun.PNG_1_aa_jrcnbx.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631377650/IMG_6044_jrsogp.png" alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631377711/Ganesha_MUN_Club_Logo_2_hkg33q.png"
                        alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631378036/qwer3_ug731e.png" alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631378036/qwer2_bjae9v.png" alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631378036/qwer1_etlppw.png" alt="" />
                    <img class="self-center w-1/7"
                        src="https://res.cloudinary.com/varkyu/image/upload/v1631378176/messageImage_1630309499658_w0yuxl.jpg"
                        alt="" />

                </div>
            </div>

        </div>
        <div class="
          flex
          flex-col
          md:flex-row
          justify-evenly
          items-center
          w-full
          h-full
          pt-20
          max-w-7xl
          mx-auto
          pb-20
          relative
         
        ">
            <div class="w-20 md:w-36 items-center">
                <img class="object-contain"
                    src="https://res.cloudinary.com/varkyu/image/upload/v1631439605/unknown_ccyizt.png" alt="" />
            </div>
            <div
                class="flex flex-col text-foot-0 font-sans w-2/3 md:w-1/4 justify-center items-center md:items-start md:justify-start h-36">
                <div class="font-semibold text-xl pb-2 pt-10 md:pt-0">About</div>
                <div class="text-xs font-light text-center md:text-left">
                    Surabaya MUN, is the first International Model United Nations in Surabaya held by ITS MUN Club
                    supported by Institut Teknologi Sepuluh Nopember.
                </div>
            </div>
            <div
                class="flex flex-col text-foot-0 font-sans w-1/2 md:w-1/6 justify-center md:justify-start items-center md:items-start h-36">
                <div class="font-semibold text-xl pb-2 pt-20  md:pt-0">Social Media</div>
                <div class="font-thin text-center md:text-left pb-20 flex flex-row md:flex-col">
                    <a href="https://www.instagram.com/surabayamun/" target="_blank"
                        class="text-white hover:text-signup-0 transform translate duration-300 text-lg font-light">Linkedin</a>
                    <a href="https://www.linkedin.com/company/surabaya-model-united-nations/mycompany/" target="_blank"
                        class="text-white hover:text-signup-0 transform translate duration-300 text-lg px-4 md:px-0 py-0 md:py-2 font-light">Instagram</a>
                    <a href="https://vt.tiktok.com/ZSJKm7RkF/" target="_blank"
                        class="text-white hover:text-signup-0 transform translate duration-300 text-lg font-light">Tiktok</a>
                </div>
            </div>
            <div
                class="flex flex-col text-foot-0 font-sans w-1/2 md:w-1/6 justify-center md:justify-start items-center md:items-start h-36">
                <div class="font-semibold text-xl pb-2  md:pt-0">Contact Us</div>
                <div class="text-xs font-thin text-center md:text-left">
                    <a href="mailto:surabayamun@gmail.com"
                        class="text-white hover:text-signup-0 transform translate duration-300 text-lg font-light">Email</a>
                </div>
                <div class="text-xs font-thin text-center md:text-left">
            <a href="mailto:admin@surabayamun.com" class="text-white hover:text-signup-0 transform translate duration-300 text-lg font-light">Dev Support</a>
</div>
            </div>
        </div>
        <hr class="block h-0.5 bg-foot-0 opacity-25 rounded-full mx-auto max-w-7xl w-1/2 md:w-full" />
        <div class="flex items-center justify-center  mx-auto max-w-7xl relative">
            <div class="text-foot-0 font-thin  py-6 text-xxs md:text-md">Surabaya MUN 2021. All Rights Reserved</div>
        </div>
    </footer>
</div>
@endsection