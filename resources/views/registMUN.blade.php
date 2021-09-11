@extends('layouts.navbarnotlogin ')

@section('content')
<section class="bg-main-0 flex justify-center">
    <div class="max-w-7xl items-center">
        <div class="flex flex-col justify-center items-center py-10 bg-main-0">
            <img class="w-1/2" src="images/registmun.png" alt="">

            @if($errors->any())
            
            <h4 class='text-white font-semibold border-2 rounded-md w-auto px-4 py-2 border-red-600 mt-10'>{{$errors->first()}}</h4>
            @endif
            <form method="post" action="{{route('registMUN.post')}}" class="bg-main-0 px-10 xl:px-40 py-20 ">
                @csrf
                <div class="flex flex-wrap justify-evenly card">
                    <div class="py-6 px-4">

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
                                        <button type="button" class="delete flex justify-end items-center py-5">


                                        </button>
                                        <!-- END : BUTTON DELETE-->
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>



                <div class="w-full flex justify-start py-6 text-sm md:text-md">
                    <button type="button" class="add">
                        <div class="flex flex-row">
                            <p class="text-white hover:text-signup-0 transition duration-300" href="">Add More +
                            </p>
                        </div>

                    </button>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit" class="bg-signup-0 flex justify-center items-center rounded-lg">
                        <p class="px-4 py-2 text-white">Submit</p>
                    </button>
                </div>
            </form>









        </div>
</section>
@endsection