@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-ezra-green">About this Program</h2>

            <p class="">The Agribusiness Extension Program for Professionals (AEPP) is designed to empower stakeholders in the agribusiness sector to effectively reach and support last-mile farmers. The program equips agents working for these stakeholders with the knowledge and skills necessary to improve business delivery and service provision, ultimately leading to solutions that address the specific needs of these farmers.</p>

            <div class="flex flex-wrap md:flex-nowrap justify-around gap-4">
                <img src="{{ asset('images/fba.webp') }}" alt="" class="w-full md:w-1/2 md:h-72 object-cover object-center">

                <div class="w-full">
                    @livewire('accordion', ['title' => 'Program Structure', 'body' => 'Some description about the program structure'])

                    @livewire('accordion', ['title' => 'Program duration', 'body' => '3 weeks.'])
                    @livewire('accordion', ['title' => 'Who can participate?', 'body' => 'This elearning course is open to agribusiness professionals.'])
                    @livewire('accordion', ['title' => 'Certification', 'body' => 'You will get digital badges as you progress through the modules that make up the program and upon passing a final exam after completing the program and achieving a grade of at least 60%, you will be offered a certification.'])


                </div>

            </div>

            <div class="flex justify-center">
                <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-400 text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Start Learning Today</a>
            </div>
        </div>
    </section>

</div>

@endsection
