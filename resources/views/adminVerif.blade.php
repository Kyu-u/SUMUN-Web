@extends('layouts.adminnav ')
@section('content')
<section class="bg-main-0 flex flex-col max-w-7xl mx-auto">
    <h1 class="text-5xl text-center pb-10" style="background: #57CA85;
    background: -webkit-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: -moz-linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    background: linear-gradient(to bottom, #57CA85 0%, #184E68 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Verification</h1>
    <div class="flex flex-col gap-y-10 justify-center items-center px-10">
        @foreach($images as $image)

        <div
            class="w-97 bg-gradient-to-r from-signup-0 to-tableisi-0 px-16 gap-y-8 py-6 rounded-xl flex flex-col items-center text-white">
            <p class="text-2xl">
                @if($image->type=='MUN')
                Pembayaran MUN
                @else
                Pembayaran Webinar
                @endif
            </p>
            <div class="flex flex-row w-full gap-x-10 justify-between">
                <div class="w-32 h-44 overflow-hidden flex items-center">
                    <img src="{{ route('image.displayImage',$image->file_path) }}" alt="" />
                </div>

                <div class="flex flex-col flex-1 items-start h-44 overflow-y-scroll scrollbar-thumb-rounded-full scrollbar-thin object-contain
                    scrollbar-track-main-0 scrollbar-thumb-signup-0 pl-6">
                    @foreach($users as $user)
                    @if($image->user_id == $user->user_id)
                    <p class="py-2">
                        {{$user->name}}
                    </p>
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="flex justify-center gap-x-5">
                <form method="post" action="{{route('verify.post')}}">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="{{$image->user_id}}">

                    <div class="flex flex-row gap-5">

                        <button type="submit" class="w-auto rounded-md px-4 py-2 bg-signup-0">

                            Verify

                        </button>
                    </div>
                </form>
                <form method="post" action="{{route('verify.delete')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$image->id}}">
                    <button type="submit" class="w-auto rounded-md px-4 py-2 bg-white-0 text-signup-0">

                        Delete

                    </button>
                </form>
            </div>


        </div>

        @endforeach
    </div>
</section>
@endsection
