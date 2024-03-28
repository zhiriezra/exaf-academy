@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>
        <img src="{{ $courseDetail['courseimage'] }}" alt="" class="h-72 w-full object-cover object-top">

        <div class="p-6">
            <h4 class="font-bold text-2xl">{{ $courseDetail['fullname']}}</h4>
            <p class="mt-6">{!! $courseDetail['summary'] !!}</p>
            
        </div>
    </section>

</div>

@endsection
