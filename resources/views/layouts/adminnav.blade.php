<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">

  <title>Document</title>
  <style>
    #menu-toggle:checked+#menu {
      display: block;
    }
  </style>
</head>

<body id="adminbody" class="bg-main-0">
  <div class="relative max-w-screen-3xl mx-auto">
    <nav class="bg-main-0 py-10 text-white font-navbar font-medium">
      <div id="navitems" class="max-w-7xl mx-auto items-center grid grid-cols-9 hidden lg:grid">





        <a href="{{route('adminAssign')}}"
          class="link justify-self-center relative hover:text-signup-0 col-start-4">Council Form</a>
        <div class="justify-self-center col-start-5">
          <img class="h-20" src="images/unknown.png" alt="" />
        </div>


        <a href="{{route('admin.verif')}}"
          class="link justify-self-center relative hover:text-signup-0 col-start-6">Verification</a>


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

    </nav>

    @yield('content')


    <footer class="relative z-0 w-full">
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
          class="flex flex-col text-foot-0 font-sans w-1/2 md:w-1/4 justify-center items-center md:items-start md:justify-start h-36">
          <div class="font-semibold text-xl pb-6 pt-10 md:pt-0">About</div>
          <div class="text-xs font-thin text-center md:text-left">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip e
          </div>
        </div>
        <div
          class="flex flex-col text-foot-0 font-sans w-1/4 md:w-1/6 justify-center md:justify-start items-center md:items-start h-36">
          <div class="font-semibold text-xl pb-6 pt-20 md:pt-0">About</div>
          <div class="text-xs font-thin text-center md:text-left">
            Line : @sumunmantap <br />
            Instagram : @surabayamun <br />
            Email : admin@sumun.com
          </div>
        </div>
        <div
          class="flex flex-col text-foot-0 font-sans w-1/4 md:w-1/6 justify-center md:justify-start items-center md:items-start h-36">
          <div class="font-semibold text-xl pb-6 pt-20 md:pt-0">About</div>
          <div class="text-xs font-thin text-center md:text-left">
            Lorem ipsum dolor sit aliqua <br />
            Lorem ipsum dolor
          </div>
        </div>
      </div>
      <hr class="block h-0.5 bg-foot-0 opacity-25 rounded-full mx-auto max-w-7xl w-1/2 md:w-full" />
      <div class="flex items-center justify-center md:justify-between mx-auto max-w-7xl relative">
        <div class="text-foot-0 font-thin  py-6 ">Surabaya MUN 2021. All Rights Reserved</div>
        <div class="hidden md:flex justify-evenly items-center">
          <img class="w-1/5" src="images/linef.png" alt="" />
          <img class="w-1/5" src="images/ig.png" alt="" /><img class="w-1/5" src="images/mail.png" alt="" />
        </div>
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
      const adminbtnmob = document.querySelector('#adminbtnmob')
      const unescomob = document.querySelector('#unescomob')
      adminbtnmob.addEventListener('click', () => {
        if (unescomob.classList.contains('hidden')) {
          unescomob.classList.remove('hidden');
          unescomob.classList.add('flex');
        } else {
          unescomob.classList.remove('flex');
          unescomob.classList.add('hidden');
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
      const body = document.querySelector('#adminbody')
      function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
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
        newinput.innerHTML = '<input class="bg-transparent border-b-2 h-12 w-72 text-white" type="text" name="">';

        column.appendChild(newinput);
      }

      addinput.addEventListener('click', () => {

        document.write('<input class="bg-transparent border-b-2 h-12 w-72 text-white" type="text" name="">')
      })

    })
  </script>

</body>

</html>