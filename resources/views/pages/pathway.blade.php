@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-ezra-green">About this Program</h2>

            <p class="">The Agribusiness Extension Program for Professionals (AEPP) is designed to empower stakeholders in the agribusiness sector to effectively reach and support last-mile farmers. The program equips agents working for these stakeholders with the knowledge and skills necessary to improve business delivery and service provision, ultimately leading to solutions that address the specific needs of these farmers.</p>

            <div class="flex justify-around gap-4">
                <img src="{{ asset('images/aepp-resized.png') }}" alt="">

                <div class="w-full">
                    @livewire('accordion', ['title' => 'Program Structure', 'body' => '
                    This program consist of 6 courses, each course has the following structure.
                    <ol class="px-4 list-decimal">
                        <li>Pre-Assessment</li>
                        <li>Course Lessons</li>
                        <li>Lesson Assessment</li>
                        <li>Post-Assessment</li>
                        <li>Certifications</li>
                    </ol>'
                    ])

                    @livewire('accordion', ['title' => 'Program duration', 'body' => '3 weeks.'])
                    @livewire('accordion', ['title' => 'Who can participate?', 'body' => 'This elearning course is open to agribusiness professionals.'])

                </div>

            </div>



            <div>
                <h4 class="text-ezra-green text-2xl md:text-3xl font-semibold">Digital Certification</h4>
                <p>You will get digital badges as you progress through the modules that make up the program and upon passing a final exam after completing the program and achieving a grade of at least 75%, you will be offered a certification.</p>
            </div>

        </div>
    </section>

</div>

@endsection
