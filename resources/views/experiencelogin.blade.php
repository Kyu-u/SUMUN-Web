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

<section class="relative w-full h-full max-w-screen-3xl mx-auto">
    <div class="flex flex-col items-center justify-center bg-main-0 py-64">
        <h2 class="text-4xl md:text-5xl px-10 go:px-20 md:px-40 text-white" >
            Tell us your experience in Model United Nations
        </h2>



        <form class="flex flex-col py-10 w-2/3" action="{{ route('addExp') }}" method="POST">
        @csrf
            <label class="pb-2 text-xs nd:text-sm text-white font-semibold" for="munevent" class="">Your Experience</label>
            <input class="rounded-lg md:w-full px-4 py-2 text-xxs md:text-sm  text-xl text-black" type="text" id="munevent" name="munevent"
              placeholder="Honorable Mention in Surabaya MUN">
              <div class="flex justify-center pt-8">
                <input class="rounded-lg bg-signup-0 px-4 py-2 text-white text-xs sm:text-base tracking-widest" type="submit" value="Next"></div>
          </form>


        </div>
    </div>
</section>
</body>