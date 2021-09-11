@extends('layouts.navbarnotlogin')
@section('content')
<section class="relative">
    <div class="flex flex-col items-center justify-center bg-main-0 py-40">
        <h2 class="text-2xl md:text-3xl px-10 go:px-20 md:px-40 text-center " style="background: #57CA85;
        background: -webkit-linear-gradient(to right, #57CA85 0%, #184E68 100%);
        background: -moz-linear-gradient(to right, #57CA85 0%, #184E68 100%);
        background: linear-gradient(to right, #57CA85 0%, #184E68 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
            Check your email to verify
        </h2>



        <div class="flex items-center justify-between py-10">
            <div class="w-auto bg-signup-0 rounded-xl">
                <a href="{{route('landing')}}" class="px-4 py-2 ">Home</a>
            </div>


        </div>
    </div>
</section>
@endsection