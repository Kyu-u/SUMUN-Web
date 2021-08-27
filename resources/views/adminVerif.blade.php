@extends('layouts.adminnav ')
@section('content')
<section class="bg-main-0 flex justify-center">
    <div class="flex flex-wrap justify-center items-center px-10">
        @foreach($images as $image)
        <div class="w-auto bg-signup-0 px-16 py-6 rounded-xl flex flex-col">
            <p>
                @if($image->type=='MUN')
                Pembayaran MUN
                @else
                Pembayaran Webinar
                @endif
            </p>
            <div class="flex flex-row">
                <div class="w-32 h-44 overflow-hidden bg-gray-100">
                    <img src="{{ route('image.displayImage',$image->file_path) }}" alt="" />
                </div>

                <div class="flex flex-col pl-6 h-44 overflow-y-scroll pl-6">
                    @foreach($users as $user)
                    @if($image->user_id == $user->user_id)
                    <p class="py-2">
                        {{$user->name}}
                    </p>
                    @endif
                    @endforeach

                </div>
            </div>
            <button type="submit" class="w-auto px-4 py-2 bg-signup-0">

                submit

            </button>

        </div>
        @endforeach
    </div>
</section>
@endsection