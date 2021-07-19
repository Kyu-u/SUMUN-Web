@extends('layouts.signup ')

@section('content')

<div class=" bg-main-0 flex justify-center pb-20">
  <div class=" w-5/7 relative flex justify-center overflow-hidden">
    <img src="images/bgbg.png" alt="">
    <div type="button" onclick="javascript:history.back()" class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center absolute top-14 left-14">
            <button><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back
          </div>
    <div class="absolute p-20 flex flex-col right-0 top-0 w-1/2">
      <div class="text-white font-sans font-semibold text-7xl">
        Create a <br> New Account
      </div>
      <div class="text-white font-sans font-semibold text-3xl pt-4">
        *Senior High School Student
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      
      <form action="{{ route('regis4') }}" method="POST" class="pt-10 flex flex-col">
      @csrf
            <label class="pb-2 pt-2 text-xl text-white"for="School Name">Schoo Name</label>
            <input class=" outline-none px-3 w-96 rounded-md text-sm py-4 " type="text" id="name" name="school_name" placeholder="Your School Name...">
            <label class="pb-2 pt-2 text-xl text-white"for="Grade">Grade</label>
            <select style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;" class="drop w-96 border bg-white rounded px-3 py-4 outline-none">
                <option class="py-1 font-sans">10</option>
                <option class="py-1 font-sans">11</option>
                <option class="py-1 font-sans">12</option>


            </select>
            <label class="pb-2 pt-2 text-xl text-white"for="Major">Major</label>
            <select style="background-image: url(images/droparrow.png); background-repeat: no-repeat; background-position-x: 96%; background-position-y: 50%; background-size: 20px;"  class="drop w-96 border bg-white rounded px-3 py-4 outline-none relative">
                <option class="py-1 font-sans">Science</option>
                <option class="py-1 font-sans">Social</option>
                <img class="absolute right-4" src="images/droparrow.png" alt="">
            </select>
            <a href={{route('landing')}}>
            <button type="submit" class="bg-signup-0 text-white text-xl font-semibold font-sans w-40 h-14 rounded-md self-center mt-2 ml-20 flex justify-center items-center">
              Submit
            </button>
          </a>
          </form>

        <div class="flex justify-between w-96">
          
          <div class="flex text-white text-xl font-semibold font-sans gap-x-5 items-center">
            <button type="button" onclick="javascript:history.back()"><img class=" w-8 h-8 " src="images/back.png" alt=""></button>
             Back
          </div>

        </div>
        

        
    </div>
  </div>
</div>


@endsection