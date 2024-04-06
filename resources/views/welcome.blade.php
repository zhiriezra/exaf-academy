@extends('layouts.components.master')

@section('content')

    <section aria-label="qualities" class="mt-8 px-8 relative">

        <img src="{{ asset('images/dots.svg') }}" class="hidden md:block absolute top-1/2 -translate-y-1/2 -left-14 xl:-left-7" alt="dots" aria-hidden="true">
        <img src="{{ asset('images/dots.svg') }}" class="hidden md:block absolute top-1/2 -translate-y-1/2 -right-14 xl:-right-7" alt="dots" aria-hidden="true">
        <h2 id="qualities" class="sr-only">Our Qualities</h2>

        <div class="container mx-auto flex flex-wrap max-w-5xl items-start justify-center md:justify-between gap-8">

            <div class="grid gap-4 justify-items-center text-center md:flex-1">
                <div class="rounded-full border-4 border-ezra-green p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold">200+ Enrolled</h4>
                <p class="md:text-sm">Open platform for every agent and farmer in Africa.</p>
            </div>

            <div class="grid gap-4 justify-items-center text-center md:flex-1">
                <div class="rounded-full border-4 border-ezra-green p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold">Self-Study Courses</h4>
                <p class="md:text-sm">Learn at your comfort of your home, office and convinient times.</p>
            </div>

            <div class="grid gap-4 justify-items-center text-center md:flex-1">
                <div class="rounded-full border-4 border-ezra-green p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold">Well Curated Courses</h4>
                <p class="md:text-sm">Features an interactive, engaging and user-friendly course layouts. </p>
            </div>
        </div>
    </section>

    <section aria-label="our courses" class="bg-gray-50 p-8">
        <div class="mx-3">
            <h4 class="text-2xl md:text-3xl font-semibold text-ezra-green">Afrexa Learning Pathways</h4>
            <p class="mt-3 text-base md:text-base">Develop your career with our expertly crafted programs for all stakeholders across the Agro-allied value chain. You can build valuable skills, earn career credentials, and make impactful progress as an extensionist.</p>

            <div class="grid md:grid-cols-3 mt-12 gap-8">
                <div class="shadow-lg rounded-lg hover:bg-ezra-green-light hover:text-white">
                    <div>
                        <img src="{{ asset('images/fba.webp') }}" class="rounded-t-lg h-42 md:h-44 lg:h-52 w-full object-cover object-center" alt="">
                    </div>
                    <div class="p-4 py-6 space-y-4">
                        <h4 class="font-semibold text-md md:text-md">Student Agribusiness Extension Program (SAEP)</h4>
                        <p class="text-sm text-pretty">The Student Agribusiness Extension Program (SAEP) equips students with the knowledge and skills necessary to pursue careers in agribusiness. The program offers a comprehensive learning experience that combines classroom instruction, practical application through internships, and online learning opportunities.
                        </p>
                        <div class="pt-6">
                            <a href="#" class="bg-ezra-green p-2 text-white rounded-md">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="shadow-lg rounded-lg hover:bg-ezra-green-light hover:text-white">
                    <div>
                        <img src="{{ asset('images/farmer-graduate.jpg') }}" class="rounded-t-lg h-42 md:h-44 lg:h-52 w-full object-cover object-center" alt="">
                    </div>
                    <div class="p-4 py-6 space-y-4">
                        <h4 class="font-semibold text-md md:text-md">Graduate Agribusiness Extension Program (GAEP)</h4>
                        <p class="text-sm text-pretty">The Graduate Agribusiness Extension Program (GAEP) is designed to empower individuals at various stages of their agribusiness careers. The program equips recent graduates with the knowledge and skills needed to excel in the field, while also addressing the needs of existing Extension Agents and retirees seeking to bridge knowledge gaps and enhance their expertise.
                        </p>
                        <div class="pt-6">
                            <a href="#" class="bg-ezra-green p-2 text-white rounded-md">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="shadow-lg rounded-lg hover:bg-ezra-green-light hover:text-white">
                    <div>
                        <img src="{{ asset('images/aepp-resized.png') }}" class="rounded-t-lg h-42 md:h-44 lg:h-52 w-full object-cover object-top" alt="">
                    </div>
                    <div class="p-4 py-6 space-y-4">
                        <h4 class="font-semibold text-md md:text-md">Agribusiness Extension Program for Professionals</h4>
                        <p class="text-sm text-pretty">The Agribusiness Extension Program for Professionals (AEPP) is designed to empower stakeholders in the agribusiness sector to effectively reach and support last-mile farmers. The program equips agents working for these stakeholders with the knowledge and skills necessary to improve business delivery and service provision, ultimately leading to solutions that address the specific needs of these farmers.
                        </p>
                        <div class="pt-6">
                            <a href="#" class="bg-ezra-green p-2 text-white rounded-md">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="shadow-lg rounded-lg hover:bg-ezra-green-light hover:text-white">
                    <div>
                        <img src="{{ asset('images/finlitjpg.jpg') }}" class="rounded-t-lg h-42 md:h-44 lg:h-52 w-full object-cover object-center" alt="">
                    </div>
                    <div class="p-4 py-6 space-y-4">
                        <h4 class="font-semibold text-md md:text-md">Financial Literacy Programme</h4>
                        {{-- <p class="text-sm text-pretty line-clamp-6">This programme is for individuals who are interested in becoming Certified Financial Literacy Trainers. A trainer certificate is given to an individual who has taken all the Financial Literacy Modules and Learning Methodology on the SabiMONI platform, obtained a mark of 60% and undergone an assessment session (physical/virtual) to demonstrate that he or she can teach and transfer the knowledge to others.</p>
                        <div class="pt-6">
                            <a href="#" class="bg-ezra-green p-2 text-white rounded-md">Learn More</a>
                        </div> --}}
                        <p class="text-ezra-green-dark text-center font-bold p-14 text-xl">Coming Soon!</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="px-3">
        @livewire('courses.course-category')
    </section>

    <section class="px-8 py-8 bg-gray-50">
        <div class="mx-3">
            <h4 class="text-2xl md:text-3xl font-semibold text-ezra-green">Other Resources</h4>

            <div class="pt-6 container mx-auto flex flex-wrap max-w-5xl items-start justify-center md:justify-between gap-8">

                <div class="p-4 grid gap-4 justify-items-center text-center md:flex-1 bg-ezra-green rounded-md">
                    <div class="rounded-full border-4 border-white p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                        </svg>

                    </div>
                    <a href="http://localhost/exaf-academy/course/view.php?id=5" target="_blank" class="text-white hover:text-ezra-green-dark">
                        <h4 class="text-xl font-bold">Afrexa Forums</h4>
                    </a>
                </div>

                <div class="p-4 grid gap-4 justify-items-center text-center md:flex-1 bg-ezra-green rounded-md">
                    <div class="rounded-full border-4 border-white p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div>
                    <a href="#" class="text-white hover:text-ezra-green-dark">
                        <h4 class="text-xl font-bold">Afrexa Chat Bot</h4>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section class="px-8 pb-12" class="partners">
        <div class="mx-3">
            <h4 class="text-2xl md:text-3xl font-semibold text-ezra-green">Partners</h4>

            <div class="items-center pt-6">
                <div class="container mx-auto">
                    <p class="text-center">To provide cutting-edge transformative learning to extensionists and youth agribusiness enthusiasts, building a robust African extension system that unlocks sustainable agricultural productivity and profitability for farmers and value chain actors.</p>
                </div>

                <div class="pt-6 flex flex-wrap justify-center gap-8 max-w-full mx-auto">
                    <div class="p-4 bg-white shadow-xl rounded-md">
                        <img src="{{ asset('images/partner-logos-giz.webp')}}" alt="" class="h-32 w-48">
                    </div>

                    <div class="p-4 bg-white shadow-xl rounded-md">
                        <img src="{{ asset('images/partner-logos-gfras.webp')}}" alt="" class="h-32 w-48">
                    </div>

                    <div class="p-4 bg-white shadow-xl rounded-md">
                        <img src="{{ asset('images/partner-logos-sawbo.webp')}}" alt="" class="h-32 w-48">
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
