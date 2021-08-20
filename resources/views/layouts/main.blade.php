<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,viewport-fit=cover,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" href="/css/app.css">
  <title>Surabaya Model United Nations</title>
  <meta name="description"
    content="Surabaya Model United Nations is the first international Model United Nations conference in Surabaya, was held by the ITS Model United Nations Club">
<meta name="keywords" content="Surabaya,MUN,SUMUN,Surabaya MUN,Conference">
<meta name="author" content="sumun">
    <link rel="shortcut icon" type="image/x-icon" href="images/surabayamunlogo.png">
    <link rel="apple-touch-icon" href="images/surabayamunlogo.png" sizes="128x128">
    <link rel="apple-touch-icon" href="images/surabayamunlogo.png" sizes="192x192">
    <meta property="og:title" content="Surabaya Model United Nations">
    <meta property="og:site_name" content="sumun">
    <meta property="og:url" content="sumun.com">
    <meta property="og:description"
        content="Surabaya Model United Nations is the first international Model United Nations conference in Surabaya, was held by the ITS Model United Nations Club">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://res.cloudinary.com/dxy6iowwg/image/upload/v1629339198/sumunlogo_irqixh.png">
</head>

<body class="relative">
  <div>

    <!-- <nav class="bg-main-0 py-10 text-white font-navbar font-medium">
      <div
        id="navitems"
        class="max-w-7xl mx-auto items-center grid grid-cols-9"
      >
        <a href="" class="link active justify-self-center relative hover:text-signup-0">
          Home
        </a>
        <a href="" class="link justify-self-center relative hover:text-signup-0"
          >About</a
        >
        <a href="" class="link justify-self-center relative hover:text-signup-0"
          >Council & Topic</a
        >
        <a href="" class="link justify-self-center relative hover:text-signup-0"
          >Schedule</a
        >
        <div class="justify-self-center">
          <img class="h-20" src="{{URL::asset('images/unknown.png')}}" alt="" />
        </div>

        <a href="" class="link justify-self-center relative hover:text-signup-0"
          >Registration</a
        >
        <a href="" class="link justify-self-center relative hover:text-signup-0"
          >Merchandise</a
        >

        <div
          id="navitems"
          class="justify-self-center flex gap-4 items-center text-sm col-span-2"
        >
          <a href="#login" class="link justify-self-start relative hover:text-signup-0"
            >Log In</a
          >
          <div class="text-xs"><h2>or</h2></div>
          <button
            type="button"
            class="
              bg-signup-0
              px-10
              py-1
              text-white
              font-bold font-navbar
              rounded-full
              hover:bg-buttonactive-0
            "
          >
            Sign Up
          </button>
        </div>
      </div>
    </nav> -->
    <nav class="bg-main-0 py-10 text-white font-navbar font-medium overflow-visible">
      <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9">
        <a href={{route('landing')}} class="link justify-self-center relative hover:text-signup-0">Home</a>



        <div class="flex justify-center relative w-full">
          <button id="menu-btn" class="inline-flex items-center hover:text-signup-0 border-none">
            <span class="mr-2">About</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <div id="dropdown"
            class="hidden absolute left-0 right-0 mx-auto rounded-md top-6 flex-col bg-signup-0 w-auto  mt-1 justify-center z-10">
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">What is SUMUN</a>
            </div>
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">Chair</a>
            </div>
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">Board of Directors</a>
            </div>
          </div>
        </div>
        <div class=" justify-self-center flex relative">
          <button id="menu-btn3" class="inline-flex items-center hover:text-signup-0">
            <span class="mr-2">Council & Topic</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
          </button>
          <div id="dropdown3" class="hidden absolute  top-6 flex-col bg-signup-0 w-32  mt-1 justify-center z-10">
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">ILO</a>
            </div>
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">DISEC</a>
            </div>
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">UNHRC</a>
            </div>
          </div>
        </div>

        <a href="" class="link justify-self-center relative hover:text-signup-0">Schedule</a>
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
            class="hidden absolute left-0 right-0 mx-auto top-6 flex-col bg-signup-0 w-28  mt-1 justify-center z-10">
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">MUN</a>
            </div>
            <div class="flex py-2 justify-center hover:bg-dropdown-0 ">
              <a href="#">Webinar</a>
            </div>
          </div>
        </div>
        <a href="" class="link justify-self-center relative hover:text-signup-0">Merchandise</a>

        <div id="navitems" class="justify-self-center flex gap-4 items-center text-sm col-span-2">
          <a href="{{ route('showLoginForm') }}" class="link justify-self-start relative hover:text-signup-0">Log In</a>
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
            <a href="{{ route('signup1') }}" class="no-underline ...">Sign Up</a>
          </button>
        </div>
      </div>
    </nav>
    <!-- <script src="{{ URL::to('js/main.js') }}"></script> -->

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

    @yield('content')
  </div>

</body>

</html>