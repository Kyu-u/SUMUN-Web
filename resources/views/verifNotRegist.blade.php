@extends('layouts.navbarprofile' )
@section('content')
  <section class="relative">
<div class="flex flex-col items-center justify-center bg-main-0 py-40">
    <h2 class="text-2xl md:text-5xl px-10 go:px-20 md:px-40 text-center " style="background: #57CA85;
    background: -webkit-linear-gradient(to right, #57CA85 0%, #184E68 100%);
    background: -moz-linear-gradient(to right, #57CA85 0%, #184E68 100%);
    background: linear-gradient(to right, #57CA85 0%, #184E68 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;" >
    you haven't registered anything yet
    </h2>


    
    <div class="flex flex-row items-center justify-between py-10">

        <h3 class="text-white py-10 mr-20">
            click the button  to register :
        </h3>
        <div class="flex flex-col items-center justify-center ">
            <a href="{{route('registMUN')}}" class="py-1 text-white hover:text-signup-0 transition duration-300
            py-1 text-white hover:text-signup-0 transition duration-300">  Surabaya Model United Nations </a>

            <a href="{{route('regisweb')}}" class="py-1 text-white hover:text-signup-0 transition duration-300
            py-1 text-white hover:text-signup-0 transition duration-300">Webinar</a>
        </div>

    </div>
</div>
        </section>
@endsection
