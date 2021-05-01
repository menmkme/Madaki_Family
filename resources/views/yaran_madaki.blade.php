@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-900 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Madaki's Profile

            </header>


            <div class="w-full p-6 bg-gray-700">
                {{-- <p class="text-gray-200 ">
                    Masha ALLAH! Inda rabbana.
                </p> --}}
                @if (Auth::user())
                <div class="pt-0 px-4">
                <a href="/yaran_madaki/create_md_childs"
                class="border-b-2 pb-2 border-dotted italic text-gray-200">
                Add Something about Madaki &rarr;
                </a>
                @else
                <p class="py-8 bold">
                    Please login to Something about madaki!
                </p>
            @endif
            </div>
            <div class="dsl">
                @foreach ($ymadakis as $madaki)
                <img  src="{{ asset('images/' . $madaki->img_path) }}" class="py-7 w-2/1 py-5 mb-8 shadow-xl center circular--square" alt="">
                <div class=" px-10 py-7">
                    <div class="float-right ">

                        <a
                            class="px-20 border-b-2 pb-2 border-dotted italic text-blue-500"
                            href="cars/{{ $madaki->id }}/edit">
                            Edit &rarr;
                        </a>
                    </div>
                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                          Age : {{ $madaki->DOB }}
                    </span>
                    <h2 class="text-gray-200 text-5xl">
                        <a href="">
                            {{ $madaki->First_Name }}
                    </h2>
                    <p class="text-lg text-gray-300">
                        {{ $madaki->Description }}
                    </p>
                    <hr class="mt-4 mb-8">
                </div>
                @endforeach
            </div>
            </div>
        </section>
    </div>
</main>
@endsection
