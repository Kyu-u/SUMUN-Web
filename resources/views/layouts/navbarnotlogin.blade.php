<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, viewport-fit=cover,minimum-scale=1,maximum-scale=1,user-scalable=no"">
        <link rel=" stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Surabaya Model United Nations</title>
    <style>
        #menu-toggle:checked+#menu {
            display: block;
            transitions: 0.5s;
        }

    </style>
     <style>
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        .carousel-indicators {
            list-style: none;
            z-index: 10;
        }
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #57CA85;  /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
    
    <meta name="description"
        content="Surabaya Model United Nations is the first international Model United Nations conference in Surabaya, was held by the ITS Model United Nations Club">
    <meta name="keywords" content="Surabaya,MUN,SUMUN,Surabaya MUN,Conference">
    <meta name="author" content="surabayamun">
    <link rel="shortcut icon" type="image/x-icon" href="images/surabayamunlogo.png">
    <link rel="apple-touch-icon" href="images/surabayamunlogo.png" sizes="128x128">
    <link rel="apple-touch-icon" href="images/surabayamunlogo.png" sizes="192x192">
    <link rel="canonical" href="https://www.surabayamun.com/landing" />
    <meta property="og:title" content="Surabaya Model United Nations">
    <meta property="og:site_name" content="surabayamun">
    <meta property="og:url" content="surabayamun.com">
    <meta property="og:description"
        content="Surabaya Model United Nations is the first international Model United Nations conference in Surabaya, was held by the ITS Model United Nations Club">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://res.cloudinary.com/dxy6iowwg/image/upload/v1629339198/sumunlogo_irqixh.png">
</head>

<body class="bg-main-0">
    <div class="relative max-w-screen-3xl mx-auto">
        @if (Auth::check())
        <nav class="bg-main-0 py-10 text-white font-navbar font-medium relative z-10">
            <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid">
                <a href="{{route('landing')}}" class="link justify-self-center relative hover:text-signup-0">Home</a>



                <a href="{{route('about')}}" class="link justify-self-center relative hover:text-signup-0">About</a>

                <a href="{{route('council')}}" class="link justify-self-center relative hover:text-signup-0">Council</a>


                <a href="{{route('landing')}}#timeline"
                    class="link justify-self-center relative hover:text-signup-0">Schedule</a>
                <div class="justify-self-center">
                    <img class="h-20" src="images/unknown.png" alt="" />
                </div>

                <div class=" justify-self-center flex relative">
                    <button id="menu-btn2" class="inline-flex items-center hover:text-signup-0">
                        <span class="mr-4">Registration</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <div id="dropdown2" class="hidden absolute top-6 flex-col bg-signup-0 w-28  mt-1 justify-center">
                        <div class="flex py-2 justify-center hover:bg-dropdown-0 " >
                            <a href="{{route('registMUN')}}" >MUN</a>
                        </div>
                        <div class="flex py-2 justify-center hover:bg-dropdown-0 " >
                            <a href="{{route('regisweb')}}" >Webinar</a>
                        </div>
                        <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                            <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                        </div>
                    </div>
                </div>
                <a href="{{route('merch')}}"
                    class="link justify-self-center relative hover:text-signup-0">Merchandise</a>

                <a href="{{route('profile')}}" class="link justify-self-center relative hover:text-signup-0">{{Auth::user()->username}}</a>

                <form method="POST" action="{{route('logout1')}}"
                    class="justify-self-center flex  col-span-1 items-center hover:text-signup-0 transition duration-300">
                    @csrf
                    <button type="submit" class="w-full">
                        Logout
                    </button>
                </form>
            </div>

            <div class="lg:hidden px-6  flex flex-wrap items-center ">
                <div class="flex flex-1 justify-between items-center">
                    <img class="h-10" src="images/unknown.png" alt="">
                </div>


                <label for="menu-toggle" class="cursor-pointer ">
                    <svg class="" width="26" height="23" viewBox="0 0 26 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Hamburger</title>
                        <rect y="0.0529785" width="25.0576" height="4.12271" rx="2.06136" fill="white" />
                        <rect x="3.91504" y="9.12292" width="21.1424" height="4.12271" rx="2.06136" fill="white" />
                        <rect x="8.61377" y="18.1929" width="16.4441" height="4.12271" rx="2.06135" fill="white" />
                    </svg>
                </label>
                <input type="checkbox" class="hidden" id="menu-toggle">

                <div class="hidden py-6 w-full  " id="menu">
                    <div class="flex flex-col justify-between items-end">
                        <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Home</a>
                        <a class="block pb-2 hover:text-signup-0 " href="{{route('about')}}">About</a>
                        <a class="block pb-2 hover:text-signup-0" href="{{route('council')}}">Council & Topic</a>
                        <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Schedule</a>
                        <div class="flex flex-col">
                            <button id="mobilenavbardropdownbtn"
                                class="inline-flex items-center hover:text-signup-0 pb-2">
                                <span class="mr-4">Registration</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <div id="mobilenavbardropdown" class="flex-col hidden items-end">
                                <div class="flex py-2 justify-center hover:bg-dropdown-0 " >
                                    <a href="{{route('registMUN')}}" >MUN</a>
                                </div>
                                <div class="flex py-2 justify-center hover:bg-dropdown-0" >
                                    <a href="{{route('regisweb')}}" >Webinar</a>
                                </div>
                                <div class="flex py-2 justify-center hover:text-dropdown-0 ">
                                    <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                                </div>
                            </div>
                        </div>
                        <a class="block pb-2 hover:text-signup-0" href="{{route('merch')}}">Merchandise</a>
                        <a class="block hover:text-signup-0" href="{{route('profile')}}">{{Auth::user()->username}}
                        </a>
                        <form method="POST" action="{{route('logout1')}}"
                            class="block pb-2 hover:text-signup-0 transition duration-300">
                            @csrf
                            <button type="submit" class="w-full">
                                Logout
                            </button>
                        </form>
                    </div>

                </div>



            </div>

        </nav>
        @else
        {{-- <nav class="bg-main-0 py-10 text-white font-navbar font-medium">
      <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid">
        <a href="{{route('landing')}}" class="link justify-self-center relative hover:text-signup-0">Home</a>
        <a href="{{route('about')}}" class="link justify-self-center relative hover:text-signup-0">About</a>
        <a href="{{route('council')}}" class="link justify-self-center relative hover:text-signup-0">Council</a>
        <a href="{{route('landing')}}#timeline"
            class="link justify-self-center relative hover:text-signup-0">Schedule</a>
        <div class="justify-self-center">
            <img class="h-20" src="images/unknown.png" alt="" />
        </div>
        <div class=" justify-self-center flex relative">
            <button id="menu-btn2" class="inline-flex items-center hover:text-signup-0">
                <span class="mr-4">Registration</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /> </svg>
            </button>
            <div id="dropdown2" class="hidden absolute top-6 flex-col bg-signup-0 w-28  mt-1 justify-center">
                <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                    <a href="{{route('registMUN')}}">MUN</a>
                </div>
                <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                    <a href="{{route('regisweb')}}">Webinar</a>
                </div>
            </div>
        </div>
        <a href="{{route('merch')}}" class="link justify-self-center relative hover:text-signup-0">Merchandise</a>
        <div id="navitems" class="justify-self-center flex gap-4 items-center text-sm col-span-2">
            <a href="{{route('showLoginForm')}}" class="link justify-self-start relative hover:text-signup-0">Log In</a>
            <div class="text-xs">
                <h2>or</h2>
            </div>
            <a href="" class="
                bg-signup-0
                px-10
                py-1
                text-white
                font-bold font-navbar
                rounded-full
                hover:bg-buttonactive-0
              ">
                Sign Up
            </a>
        </div>
    </div>
    <div class="lg:hidden px-6  flex flex-wrap items-center ">
        <div class="flex flex-1 justify-between items-center">
            <img class="h-10" src="images/unknown.png" alt="">
        </div>
        <label for="menu-toggle" class="cursor-pointer ">
            <svg class="" width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <title>Hamburger</title>
                <rect y="0.0529785" width="25.0576" height="4.12271" rx="2.06136" fill="white" />
                <rect x="3.91504" y="9.12292" width="21.1424" height="4.12271" rx="2.06136" fill="white" />
                <rect x="8.61377" y="18.1929" width="16.4441" height="4.12271" rx="2.06135" fill="white" />
            </svg>
        </label>
        <input type="checkbox" class="hidden" id="menu-toggle">
        <div class="hidden py-6 w-full  " id="menu">
            <div class="flex flex-col justify-between items-end">
                <a class="block pb-2 hover:text-signup-0" href="">Home</a>
                <a class="block pb-2 hover:text-signup-0 " href="">About</a>
                <a class="block pb-2 hover:text-signup-0" href="">Council & Topic</a>
                <a class="block pb-2 hover:text-signup-0" href="">Schedule</a>
                <a class="block pb-2 hover:text-signup-0" href="">Registration</a>
                <a class="block pb-2 hover:text-signup-0" href="">Merchandise</a>
                <a class="block hover:text-signup-0" href="">Login</a>
            </div>
        </div>
    </div>
    </nav> --}}
    <nav class="bg-main-0 py-10 text-white font-navbar font-medium relative z-10">
        <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid">
            <a href="{{route('landing')}}" class="link justify-self-center relative hover:text-signup-0">Home</a>



            <a href="{{route('about')}}" class="link justify-self-center relative hover:text-signup-0">About</a>

            <a href="{{route('council')}}" class="link justify-self-center relative hover:text-signup-0">Council</a>


            <a href="{{route('landing')}}#timeline"
                class="link justify-self-center relative hover:text-signup-0">Schedule</a>
            <div class="justify-self-center">
                <img class="h-20" src="images/unknown.png" alt="" />
            </div>

            <div class=" justify-self-center flex relative">
                <button id="menu-btn2" class="inline-flex line-through text-gray-700 items-center " disabled>
                    <span class="mr-4">Registration</span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
                <div id="dropdown2" class="hidden absolute top-6 flex-col bg-signup-0 w-28  mt-1 justify-center">
                    <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                        <a href="{{route('registMUN')}}">MUN</a>
                    </div>
                    <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                        <a href="{{route('regisweb')}}">Webinar</a>
                    </div>

                </div>
            </div>
            <a href="{{route('merch')}}" class="link justify-self-center relative hover:text-signup-0">Merchandise</a>

            <div id="navitems" class="justify-self-center flex gap-4 items-center text-sm col-span-2">
                <a href="{{route('showLoginForm')}}" class="link justify-self-start relative hover:text-signup-0">Log
                    In</a>
                <div class="text-xs">
                    <h2>or</h2>
                </div>
                <a href="{{route('signup1')}}" class="
                  bg-signup-0
                  px-10
                  py-1
                  text-white
                  font-bold font-navbar
                  rounded-full
                  hover:bg-buttonactive-0
                ">
                    Sign Up
                </a>
            </div>
        </div>

        <div class="lg:hidden px-6  flex flex-wrap items-center ">
            <div class="flex flex-1 justify-between items-center">
                <img class="h-10" src="images/unknown.png" alt="">
            </div>


            <label for="menu-toggle" class="cursor-pointer ">
                <svg class="" width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <title>Hamburger</title>
                    <rect y="0.0529785" width="25.0576" height="4.12271" rx="2.06136" fill="white" />
                    <rect x="3.91504" y="9.12292" width="21.1424" height="4.12271" rx="2.06136" fill="white" />
                    <rect x="8.61377" y="18.1929" width="16.4441" height="4.12271" rx="2.06135" fill="white" />
                </svg>
            </label>
            <input type="checkbox" class="hidden" id="menu-toggle">

            <div class="hidden py-6 w-full  " id="menu">
                <div class="flex flex-col justify-between items-end">
                    <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Home</a>
                    <a class="block pb-2 hover:text-signup-0 " href="{{route('about')}}">About</a>
                    <a class="block pb-2 hover:text-signup-0" href="{{route('council')}}">Council & Topic</a>
                    <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Schedule</a>
                    <div class="flex flex-col">
                        <button id="mobilenavbardropdownbtn" class="inline-flex items-center line-through text-gray-700 pb-2"
                            disabled>
                            <span class="mr-4">Registration</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </button>
                        <div id="mobilenavbardropdown" class="flex-col hidden items-end">
                            <div class="flex py-2 justify-center hover:text-dropdown-0 ">
                                <a href="{{route('registMUN')}}">MUN</a>
                            </div>
                            <div class="flex py-2 justify-center hover:text-dropdown-0 ">
                                <a href="{{route('regisweb')}}">Webinar</a>
                            </div>
                            <div class="flex py-2 justify-center hover:text-dropdown-0 ">
                                <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                            </div>
                        </div>
                    </div>
                    <a class="block pb-2 hover:text-signup-0" href="{{route('merch')}}">Merchandise</a>
                    <a class="block hover:text-signup-0" href="{{route('showLoginForm')}}">Login</a>
                    </a>

                </div>

            </div>



        </div>

    </nav>
    @endif

    <div class="font-judul">
        @yield('content')

    </div>


    <footer class="relative bg-main-0 ">
        <div class="bg-gradient-to-t from-footgr-0 absolute w-full h-full opacity-50"></div>
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
                <img class="object-contain" src="images/unknown.png" alt="" />
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
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const menuBtn2 = document.querySelector('#menu-btn2')
            const dropdown2 = document.querySelector('#dropdown2')

            menuBtn2.addEventListener('click', () => {
                if (dropdown2.classList.contains('hidden')) {
                    dropdown2.classList.remove('hidden');
                    dropdown2.classList.add('flex');
                } else {
                    dropdown2.classList.remove('flex');
                    dropdown2.classList.add('hidden');
                }
            })
        })

    </script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const mnbtn = document.querySelector('#mobilenavbardropdownbtn');
            const mnbd = document.querySelector('#mobilenavbardropdown')

            mnbtn.addEventListener('click', () => {
                console.log('test')

                if (mnbd.classList.contains('hidden')) {
                    mnbd.classList.remove('hidden');
                    mnbd.classList.add('flex');
                } else {
                    mnbd.classList.remove('flex');
                    mnbd.classList.add('hidden');
                }

            })
        })

    </script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const menuBtn = document.querySelector('#menu-btn')
            const dropdown = document.querySelector('#dropdown')
            menuBtn.addEventListener('click', () => {
                if (dropdown.classList.contains('hidden')) {
                    dropdown.classList.remove('hidden');
                    dropdown.classList.add('flex');
                } else {
                    dropdown.classList.remove('flex');
                    dropdown.classList.add('hidden');
                }
            })
        })

    </script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const menuBtn3 = document.querySelector('#menu-btn3')
            const dropdown3 = document.querySelector('#dropdown3')
            menuBtn3.addEventListener('click', () => {
                if (dropdown3.classList.contains('hidden')) {
                    dropdown3.classList.remove('hidden');
                    dropdown3.classList.add('flex');
                } else {
                    dropdown3.classList.remove('flex');
                    dropdown3.classList.add('hidden');
                }
            })
        })

    </script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const adminbtn = document.querySelector('#adminbtn')
            const unesco = document.querySelector('#unesco')
            adminbtn.addEventListener('click', () => {
                if (unesco.classList.contains('hidden')) {
                    unesco.classList.remove('hidden');
                    unesco.classList.add('flex');
                } else {
                    unesco.classList.remove('flex');
                    unesco.classList.add('hidden');
                }

                // unesco.classList.toggle('hidden')
                // unesco.classList.toggle('flex')
            })
        })

    </script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const backbtn = document.querySelector('#modalback')
            const overlay = document.querySelector('#overlay')
            const modalbutton = document.querySelector('#overlaybtn2')
            backbtn.addEventListener('click', () => {
                console.log('test')
                if (overlay.classList.contains('flex')) {
                    overlay.classList.remove('flex');
                    overlay.classList.add('hidden');
                }

            })
            modalbutton.addEventListener('click', () => {
                console.log('test')
                //  if(overlay.classList.contains('hidden')){
                //     overlay.classList.remove('hidden');
                //     overlay.classList.add('flex');
                // }
                overlay.classList.toggle('flex');
                overlay.classList.toggle('hidden');

            })

        })

    </script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            console.log('test')

            const councilbtn = document.querySelector('#councilbutton')
            const verifbtn = document.querySelector('#verifbutton')
            const aboutbtn = document.querySelector('#aboutbutton')
            const addinput = document.querySelector('#addinput')
            const column = document.querySelector('#inputcolumn')

            councilbtn.addEventListener('click', () => {
                console.log('test')

                if (aboutbtn.classList.contains('hidden')) {
                    aboutbtn.classList.remove('hidden');
                    aboutbtn.classList.add('flex');
                }

            })
            verifbtn.addEventListener('click', () => {
                console.log('test')

                if (aboutbtn.classList.contains('flex')) {
                    aboutbtn.classList.remove('flex');
                    aboutbtn.classList.add('hidden');
                }

            })



            function createNewInput() {
                var newinput = document.createElement('div');
                newinput.classList.add('relative');
                newinput.innerHTML =
                    '<input class="bg-transparent border-b-2 h-12 w-72 text-white" type="text" name="">';

                column.appendChild(newinput);
            }
            addinput.addEventListener('click', () => {

                document.write(
                    '<input class="bg-transparent border-b-2 h-12 w-72 text-white" type="text" name="">'
                )
            })
        })

    </script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.card')
            const add = document.querySelector('.add')

            add.addEventListener('click', () => {

                const html = `<div  class="del py-6 px-4">

<div class="w-52 ip:w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

    <div class="py-4 px-8 md:px-16 md:py-8">
        <div class="flex flex-col text-white">
            <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
            <input class="text-black rounded-md py-1 px-2 md:px-4 md:py-2" type="text"
                id="Username" name="username[]" placeholder="Username">
            <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                class="">Council</label>
            <select class="text-black rounded-md py-1 px-2 md:px-4 md:py-2" id="Council"
                name="council[]">
                <option value="UNDP">UNDP</option>
                <option value="UNEP">UNEP</option>
                <option value="UNSC">UNSC</option>
            </select>

            <div class="flex flex-row justify-end">
                <!-- START : BUTTON DELETE-->
                <button onclick="myDelete()" type="button" class="delete flex justify-end items-center pt-4 text-sm md:text-md">
                    Delete 
                </button>
                <!-- END : BUTTON DELETE-->
            </div>
        </div>
    </div>

</div>


</div>`;
                const addCard = document.querySelector(`.card`);
                addCard.innerHTML += html;
            });
        })

    </script>

    <script>
        function myDelete() {
            var hapus = document.querySelector('.del')
            hapus.remove();
        }

    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
