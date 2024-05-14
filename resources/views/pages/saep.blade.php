@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-xl md:text-2xl font-semibold text-ezra-green">About Student Agribusiness Extension Program</h2>

            <p class="text-sm">The Student Agribusiness Extension Program (SAEP) equips students with the knowledge and skills necessary to pursue careers in agribusiness. The program offers a comprehensive learning experience that combines classroom instruction, practical application through internships, and online learning opportunities.</p>

            <img src="{{ asset('images/fba.webp') }}" alt="" class="md:hidden w-full object-cover object-top">

            <div class="flex flex-wrap md:flex-nowrap justify-around gap-4">

                <div class="gap-4 flex flex-col">

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">01</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Structure</h4>
                            <p class="text-sm">The SAEP is broken down into the following phases: Theory, Practical, Entreprenuership and the Online phase.</p>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 bg-ezra-green p-4 border shadow-md rounded-lg">
                        <div class="rounded-full bg-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">02</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Duration</h4>
                            <p class="text-sm">
                                The SAEP will last for a duration of <span class="font-semibold">3 months</span>.
                            </p>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">03</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Who can participate?</h4>
                            <p class="text-sm">
                                This program is opened for student of agricultural discplines and other enthusiast who are willing to pursue a career in agribusiness.
                            </p>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 bg-ezra-green p-4 border shadow-md rounded-lg">
                        <div class="rounded-full bg-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">04</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Certification</h4>
                            <p class="text-sm">
                                You will get digital badges as you progress through the courses that make up the program and upon passing a final exam after completing the program and achieving a grade of at least 60%, you will be offered a certification.
                            </p>

                        </div>
                    </div>

                </div>

                <img src="{{ asset('images/fba.webp') }}" alt="" class="hidden md:block w-full md:w-1/2 md:h-72 object-cover object-center">

            </div>

            <div class="flex justify-center pt-10">
                <a href="{{ route('register.saep') }}" class="bg-ezra-green-light hover:bg-ezra-green text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Register Now!</a>
            </div>
        </div>
    </section>

</div>

@endsection
