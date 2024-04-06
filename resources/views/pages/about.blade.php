@extends('layouts.components.master')

@section('content')

<div class="">

    <div class="mt-8 md:mt-0 grid md:grid-cols-2 items-center min-h-svh">
        <div class="px-6 space-y-6">
            <h2 class="font-bold text-4xl text-ezra-green">Our Purpose</h2>
            <p class="text-justify leading-relaxed md:text-2xl">
                The agricultural landscape is evolving rapidly, demanding skilled professionals equipped to navigate its challenges and opportunities. Recognizing this need, birthed the African Agribusiness Extension Academy. This dynamic initiative bridges the gap between academic knowledge and practical experience, empowering young minds to become the next generation of agribusiness leaders.
            </p>
        </div>

        <img src="{{ asset('images/medium-shot-man-paying-product.jpg') }}" class="h-full object-cover object-center" alt="">
    </div>

    <div class="bg-gray-200 py-14">
        <div class="px-6 space-y-8 py-8">
            <h2 class="font-bold text-4xl text-ezra-green-dark text-center">Contact Us</h2>

            <div class="text-center">
                <p>(+234) 907 666 065</p>
                <p>info@extensionafrica.com</p>

                <div class="address mt-8">
                    <h4 class="text-lg font-semibold">Office Addresses: </h4>
                    <ul>
                        <li>G24, Abdullahi Bayero Road, Railway Quarters, Kano - Nigeria.</li>
                        <li>G24, 4th Avenue Gwarinpa, Abuja - Nigeria.</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <div class="bg-ezra-green text-white py-14">
        <div class="px-6 space-y-8 py-8">
            <h2 class="font-bold text-4xl">Our Team</h2>
            <p class="text-justify leading-relaxed text-md">
                The AFREXA elearning team is composed of high level professionals, committed, dedicated and extremely reliable, who make the success of the AFREXA elearning Academy.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 container mx-auto mt-12 gap-8 text-black">
                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>

                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>

                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>

                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>

                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>

                <div class="flex">
                    <img src="{{ asset('images/student-2-scaled.webp')}}" alt="" class="bg-white rounded-full h-28 w-28 object-contain object-center border-4 border-yellow-400 hover:transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 delay-200">
                    <div class="px-4 pt-8">
                        <h4 class="font-semibold">Taofiqah Ajetumobi</h4>
                        <p class="text-sm">Academy Researcher</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
