@extends('layouts.components.master')

@section('content')

<div class="min-h-svh px-6 mt-12">
        <h4 class="text-2xl md:text-3xl font-bold text-ezra-green">Course Catalogue</h4>

        <div class="grid md:grid-cols-3 my-12 gap-y-8 gap-x-4">

            @foreach($courses as $course)
                <div class="shadow-md hover:shadow-lg rounded-b-md">
                    <img src="{{ asset('images/farmer-graduate.jpg') }}" class="rounded-t-lg" alt="">
                    <div class="p-4 py-6 space-y-4">
                        <h4 class="text-md font-bold">{{ $course['fullname'] }}</h4>
                        <p class="text-sm">{{ Str::words($course['summary'], 25) }}</p>

                        <div class="pt-6">
                            <a href="#" class="bg-ezra-green p-2 text-white rounded-md">Learn More</a>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>

</div>

@endsection
