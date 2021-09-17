@extends('layouts.navbarnotlogin')
@section('content')


<section class="bg-main-0 py-20 flex flex-col justify-center items-center relative">
            <img src="images/ornamenmerch1.png" alt="" class="absolute top-0 left-0 z-0 md:z-10 w-1/2 md:w-1/3 animate-pulse">
            <img src="images/ornamenmerch2.png" alt=""
                class="absolute bottom-0 right-0 z-0 md:z-10 w-1/2 md:w-1/6 animate-pulse ">

                <div class="flex pb-20 justify-center items-center text-5xl" style="background: #57CA85;
                background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
                background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
                background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">
                    Merchandise
                </div>
                
                <div class="carousel relative  bg-main-0 align-items justify-center flex">
                    <div class="carousel-inner relative overflow-hidden w-full md:w-1/4 rounded-2xl">
                      <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute w-full flex justify-center align-items opacity-0" >
                            <div class="block h-full w-full text-white  text-center bg-signup-0"><img src="images/mercha.png" alt=""> 
                            <div class="py-4 flex  items-center justify-center">

                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeR7mtNkxbXry-Lw51255YfNM6NGHwNihn14NgrAgtp3_VQ4Q/viewform" target="_blank" class="bg-cardcouncil-0 w-auto px-4 py-2 text-xl rounded-lg z-20 relative">
                                    Buy
                                </a> 
                            </div>
                            </div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                        
                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item w-full opacity-0 absolute w-full flex justify-center align-items" >
                            <div class="block h-full w-full bg-signup-0 text-white  text-center"><img src="images/merchb.png" alt=""> <div class="py-4 flex  items-center justify-center">

                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeR7mtNkxbXry-Lw51255YfNM6NGHwNihn14NgrAgtp3_VQ4Q/viewform" target="_blank" class="z-20 relative bg-cardcouncil-0 w-auto px-4 py-2 text-xl rounded-lg">
                                    Buy
                                </a> 
                            </div></div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                        
                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item  opacity-0 absolute w-full flex justify-center align-items" >
                            <div class="block h-full w-full bg-signup-0 text-white  text-center"><img src="images/merchc.png" alt=""> <div class="py-4 flex  items-center justify-center">

                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeR7mtNkxbXry-Lw51255YfNM6NGHwNihn14NgrAgtp3_VQ4Q/viewform" target="_blank" class="bg-cardcouncil-0 w-auto px-4 py-2 text-xl rounded-lg z-20 relative">
                                    Buy
                                </a> 
                            </div></div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-signup-0 rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                
                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators absolute flex justify-center items-center bottom-0 left-0 right-0 top-1/4 md:top-1/2">
                            <li class="inline-block ">
                                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-signup-0">•</label>
                            </li>
                            <li class="inline-block px-2">
                                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-signup-0">•</label>
                            </li>
                            <li class="inline-block ">
                                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-signup-0">•</label>
                            </li>
                        </ol>
                        
                    </div>
                </div>
            
            
   
    </section>

    
@endsection