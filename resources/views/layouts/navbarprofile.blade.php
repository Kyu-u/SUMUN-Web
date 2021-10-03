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
        <div class="relative">
            <nav class="bg-main-0 py-10 text-white font-navbar font-medium relative z-10">

                <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid relative z-10">
                    <a href="{{route('landing')}}"
                        class="link justify-self-center relative hover:text-signup-0">Home</a>



                    <a href="{{route('about')}}" class="link justify-self-center relative hover:text-signup-0">About</a>

                    <a href="{{route('council')}}"
                        class="link justify-self-center relative hover:text-signup-0">Council</a>


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
                        <div id="dropdown2"
                            class="hidden z-10 absolute top-6 flex-col bg-signup-0 w-28  mt-1 justify-center">
                            <div class="flex py-2 justify-center hover:bg-dropdown-0 " >
                                <a href="{{route('registMUN')}}" >MUN</a>
                            </div>
                            <div class="flex py-2 justify-center hover:bg-dropdown-0 " ">
                                <a href="{{route('regisweb')}}" ">Webinar</a>
                            </div>
                            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('merch')}}"
                        class="link justify-self-center relative hover:text-signup-0">Merchandise</a>


                    <a href="{{route('profile')}}"
                        class="link justify-self-center relative hover:text-signup-0">{{Auth::user()->username}}</a>

                    <form method="POST" action="{{route('logout1')}}"
                        class="justify-self-center flex  col-span-1 items-center hover:text-signup-0 transition duration-300">
                        @csrf
                        <button type="submit" class="w-full">
                            Logout
                        </button>
                    </form>
                </div>

                <div class="lg:hidden px-6  flex flex-wrap items-center relative z-10">
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
                                    <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                        <a href="{{route('regisweb')}}" >Webinar</a>
                                    </div>
                                    <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                        <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                                    </div>
                                </div>
                            </div>
                            <a class="block pb-2 hover:text-signup-0" href="{{route('merch')}}">Merchandise</a>
                            <a class="block hover:text-signup-0 transition duration-300" href="{{route('profile')}}">
                                {{Auth::user()->username}}</a>
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
                <img src="images/batikmobel.png" alt="" class="block md:hidden z-0 top-0 sm:-top-20 absolute">
                <img src="images/batik2.png" alt="" class="hidden md:block z-0 top-0 lg:-top-1/2  2xl:-top-40 absolute">

            </nav>

            <div class="flex items-center justify-center bg-main-0 py-0 md:py-6 lg:py-2">
                <div class="flex flex-col justify-center">
                    <h1 class="text-signup-0 text-2xl sm:text-5xl pb-10">
                        {{Auth::user()->name}}</h1>
                    <div class="w-2/3 h-2 bg-signup-0 rounded-full self-center"></div>
                </div>
            </div>

            @else

            <div class="relative">
                <nav class="bg-main-0 py-10 text-white font-navbar font-medium z-10">
                    <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid">
                        <a href="{{route('landing')}}"
                            class="link justify-self-center relative hover:text-signup-0">Home</a>



                        <a href="{{route('about')}}"
                            class="link justify-self-center relative hover:text-signup-0">About</a>

                        <a href="{{route('council')}}"
                            class="link justify-self-center relative hover:text-signup-0">Council</a>


                        <a href="{{route('landing')}}#timeline"
                            class="link justify-self-center relative hover:text-signup-0">Schedule</a>
                        <div class="justify-self-center">
                            <img class="h-20" src="images/unknown.png" alt="" />
                        </div>

                        <div class=" justify-self-center flex relative">
                            <button id="menu-btn2" class="inline-flex items-center hover:text-signup-0">
                                <span class="mr-4">Registration</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <div id="dropdown2"
                                class="hidden absolute top-6 flex-col bg-signup-0 w-28  mt-1 justify-center">
                                <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                    <a href="{{route('registMUN')}}">MUN</a>
                                </div>
                                <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                    <a href="{{route('regisweb')}}">Webinar</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('merch')}}"
                            class="link justify-self-center relative hover:text-signup-0">Merchandise</a>

                        <div id="navitems" class="justify-self-center flex gap-4 items-center text-sm col-span-2">
                            <a href="{{route('showLoginForm')}}"
                                class="link justify-self-start relative hover:text-signup-0">Log In</a>
                            <div class="text-xs">
                                <h2>or</h2>
                            </div>
                            <button type="button" class="
               bg-signup-0
               px-10
               py-1
               text-white
               font-bold font-navbar
               rounded-full
               hover:bg-buttonactive-0
             ">
                                Sign Up
                            </button>
                        </div>
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
                                <rect x="3.91504" y="9.12292" width="21.1424" height="4.12271" rx="2.06136"
                                    fill="white" />
                                <rect x="8.61377" y="18.1929" width="16.4441" height="4.12271" rx="2.06135"
                                    fill="white" />
                            </svg>
                        </label>
                        <input type="checkbox" class="hidden" id="menu-toggle">

                        <div class="hidden py-6 w-full  " id="menu">
                            <div class="flex flex-col justify-between items-end">
                                <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Home</a>
                                <a class="block pb-2 hover:text-signup-0 " href="{{route('about')}}">About</a>
                                <a class="block pb-2 hover:text-signup-0" href="{{route('council')}}">Council &
                                    Topic</a>
                                <a class="block pb-2 hover:text-signup-0" href="{{route('landing')}}">Schedule</a>
                                <div class="flex flex-col">
                                    <button id="mobilenavbardropdownbtn"
                                        class="inline-flex items-center hover:text-signup-0 pb-2" disabled>
                                        <span class="mr-4">Registration</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </button>
                                    <div id="mobilenavbardropdown" class="flex-col hidden items-end">
                                        <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                            <a href="{{route('registMUN')}}">MUN</a>
                                        </div>
                                        <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                            <a href="{{route('regisweb')}}">Webinar</a>
                                        </div>
                                        <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
                                            <a href="{{route('verifMUN.index')}}">Verif MUN</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="block pb-2 hover:text-signup-0" href="{{route('merch')}}">Merchandise</a>
                                <a class="block hover:text-signup-0" href="{{route('showLoginForm')}}">Login</a>
                            </div>

                        </div>



                    </div>

                </nav>
            </div>
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
                            Surabaya MUN, is the first International Model United Nations in Surabaya held by ITS MUN
                            Club supported by Institut Teknologi Sepuluh Nopember.
                        </div>
                    </div>
                    <div
                        class="flex flex-col text-foot-0 font-sans w-1/2 md:w-1/6 justify-center md:justify-start items-center md:items-start h-36">
                        <div class="font-semibold text-xl pb-2 pt-20  md:pt-0">Social Media</div>
                        <div class="font-thin text-center md:text-left pb-20 flex flex-row md:flex-col">
                            <a href="https://www.instagram.com/surabayamun/" target="_blank"
                                class="text-white hover:text-signup-0 transform translate duration-300 text-lg font-light">Linkedin</a>
                            <a href="https://www.linkedin.com/company/surabaya-model-united-nations/mycompany/"
                                target="_blank"
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
                    <div class="text-foot-0 font-thin  py-6 text-xxs md:text-md">Surabaya MUN 2021. All Rights Reserved
                    </div>
                </div>
            </footer>

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
                    const width = document.querySelector('#login')
                    const width2 = document.querySelector('#sign')

                    width2.addEventListener('mouseover', () => {
                        if (width.classList.contains('w-60')) {
                            width.classList.remove('w-60')
                            width.classList.add('w-30')
                            width.classList.remove('bg-signup-0')
                            width.classList.add('border-2')
                            width.classList.add('border-signup-0')
                            width2.classList.add('w-60')
                            width2.classList.remove('w-30')
                            width2.classList.add('bg-signup-0')
                            width2.classList.remove('border-2')
                            width2.classList.remove('border-signup-0')
                        } else {
                            width2.classList.remove('w-60')
                            width2.classList.add('w-30')
                            width2.classList.remove('bg-signup-0')
                            width2.classList.add('border-2')
                            width2.classList.add('border-signup-0')
                            width.classList.add('w-60')
                            width.classList.remove('w-30')
                            width.classList.add('bg-signup-0')
                            width.classList.remove('border-2')
                            width.classList.remove('border-signup-0')
                        }
                    })
                })

            </script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
                // You can also pass an optional settings object
                // below listed default settings
                AOS.init({
                    // Global settings:
                    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                    initClassName: 'aos-init', // class applied after initialization
                    animatedClassName: 'aos-animate', // class applied on animation
                    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


                    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                    offset: 120, // offset (in px) from the original trigger point
                    delay: 0, // values from 0 to 3000, with step 50ms
                    duration: 400, // values from 0 to 3000, with step 50ms
                    easing: 'ease', // default easing for AOS animations
                    once: false, // whether animation should happen only once - while scrolling down
                    mirror: false, // whether elements should animate out while scrolling past them
                    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

                });

            </script>
</body>

</html>
