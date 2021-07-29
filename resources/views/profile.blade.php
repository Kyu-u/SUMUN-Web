@extends('layouts.navbarprofile ')

@section('content')
<section class="py-10 flex justify-center bg-main-0  mx-auto w-full px-4 sm:px-0">
        <div class=" max-w-7xl mx-auto px-2 sm:px-10 w-96 sm:w-97 bg-cardprofile-0 border-border-0 border-4 rounded-3xl ">
            <div class="flex flex-row px-2 items-center">
                <ul class="text-xxs sm:text-base flex flex-col text-signup-0 py-6">
                    <p class=" py-2">
                        School Name</p>
                    <p class="py-2">
                        Major</p>
                    <p class="py-2">
                        Council
                    </p>
                    <p class="py-2">
                        Country</p>
                </ul>
                <div class="px-4 sm:px-8">
                    <div class="w-1 h-20 bg-garis-0 rounded-lg">
                    </div>
                </div>

                <ul class="text-xxs sm:text-base flex flex-col text-white py-6 pl-2">
                    <p class="py-2">
                        {{ $users->school_name }}</p>
                    <p class="py-2">
                        {{ $users->major }}</p>
                    <p class="py-2">
                        UNESCO
                    </p>
                    <p class="py-2">
                        Great Britain</p>
                </ul>
            </div>
        </div>
    </section>
    
@endsection