@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-ezra-green">About Graduate Agribusiness Extension Program</h2>

            <p class="">The Graduate Agribusiness Extension Program (GAEP) is designed to empower individuals at various stages of their agribusiness careers. The program equips recent graduates with the knowledge and skills needed to excel in the field, while also addressing the needs of existing Extension Agents and retirees seeking to bridge knowledge gaps and enhance their expertise.</p>

            <img src="{{ asset('images/farmer-graduate.jpg') }}" alt="" class="md:hidden w-full object-cover object-top">

            <div class="flex flex-wrap md:flex-nowrap justify-around gap-4">

                <div class="gap-4 flex flex-col">

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">01</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Structure</h4>
                            <p class="text-sm">The GAEP is broken down into the following phases:</p>
                            <ul class="list-disc list-inside text-sm">
                                <li>Agripreneurship/Agribusiness Skills</li>
                                <li>Digital Skills</li>
                                <li>Extension & Advisory Skills</li>
                                <li>Soft Skills</li>

                            </ul>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 bg-ezra-green p-4 border shadow-md rounded-lg">
                        <div class="rounded-full bg-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">02</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Duration</h4>
                            <p class="text-sm">
                                The GAEP will last for a duration of <span class="font-semibold">3 months</span>.
                            </p>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">03</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Who can participate?</h4>
                            <p class="text-sm py-1">
                                Recent graduates with degrees in agriculture, related sciences, or business who are interested in pursuing careers in agribusiness extension.
                            </p>

                            <p class="text-sm py-1">
                                Existing Extension Agents employed in the field who want to update their knowledge and skills.
                            </p>

                            <p class="text-sm py-1">
                                Retirees from agribusiness extension and advisory services who wish to refresh their knowledge or re-enter the workforce.
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

                <img src="{{ asset('images/farmer-graduate.jpg') }}" alt="" class="hidden md:block w-full md:w-1/2 md:h-72 object-cover object-center">

            </div>

            <div class="flex justify-center pt-10">
                <a href="{{ route('register.gaep') }}" class="bg-ezra-green-light hover:bg-ezra-green text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Register Now!</a>
            </div>

        </div>
    </section>

</div>

@endsection
