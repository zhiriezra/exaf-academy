@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">
    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-xl md:text-2xl font-semibold text-ezra-green">About Agribusiness Extension Program for Professionals</h2>

            <p class="text-sm">The Agribusiness Extension Program for Professionals (AEPP) is designed to empower stakeholders in the agribusiness sector to effectively reach and support last-mile farmers. The program equips agents working for these stakeholders with the knowledge and skills necessary to improve business delivery and service provision, ultimately leading to solutions that address the specific needs of these farmers.</p>

            <img src="{{ asset('images/aepp-resized.png') }}" alt="" class="md:hidden w-full object-cover object-top">

            <div class="flex flex-wrap md:flex-nowrap justify-around gap-4">

                <div class="gap-4 flex flex-col">

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">01</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Structure</h4>
                            <p class="text-sm">The AEPP is broken down into the following phases:</p>
                            <ul class="list-disc list-inside text-sm">
                                <li>Understanding Last-Mile Farmers' Needs</li>
                                <li>Effective Business Delivery for Last-Mile Farmers</li>
                                <li>Addressing Behavioral Mindsets of Rural Smallholder Farmers</li>
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
                                The AEPP will last for a duration of <span class="font-semibold">3 months</span>.
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
                                Development professionals working on projects aimed at supporting last-mile farmers.
                            </p>

                            <p class="text-sm py-1">
                                Non-profit organizations working in rural communities to empower farmers.
                            </p>

                            <p class="text-sm py-1">
                                Agribusiness service providers seeking to navigate their way into solving pressing needs of last-mile farmers such as: Input suppliers, Farm machinery service providers, Insurance service providers, Credit Facility/Financial Service providers , etc.
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

                <img src="{{ asset('images/aepp-resized.png') }}" alt="" class="hidden md:block w-full md:w-full md:h-full object-cover object-top">

            </div>

            <div class="flex justify-center pt-10">
                <a href="{{ route('register.aepp') }}" class="bg-ezra-green-light hover:bg-ezra-green text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Register Now!</a>
            </div>
        </div>
    </section>

</div>

@endsection
