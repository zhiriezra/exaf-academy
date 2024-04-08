@extends('layouts.components.master')

@section('content')

<div class="min-h-svh px-6 mt-12">
        <h4 class="text-2xl md:text-3xl font-bold text-ezra-green">Course Catalogue</h4>

        <div class="grid md:grid-cols-4 my-12 gap-y-8 gap-x-4">

            @foreach($courses as $course)
            <div class="shadow-sm hover:shadow-lg">
                <a href="{{ route('course.detail', ['course' => $course['shortname']]) }}">
                    <img src="{{ $course['courseimage']}}" class="h-48 w-full object-cover object-center" alt="">
                    <h4 class="font-bold text-md py-3 px-4">{{ $course['fullname'] }}</h4>
                </a>
            </div>
            @endforeach

        </div>

</div>

@endsection
