@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="relative mx-auto">
            <img class="h-80 w-full object-cover object-top" src="{{ $courseDetail['courseimage'] }}" alt="Random image">
            <div class="absolute inset-0 bg-gray-700 opacity-60"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h4 class="text-white text-3xl font-bold">{{ $courseDetail['fullname']}}</h4>

            </div>
        </div>

        <div class="p-6">
            {!! $courseDetail['summary'] !!}

            <div class="space-y-4">
                <h5 class="font-semibold text-xl">Course Summary</h5>
                <p class="mt-2">This course welcomes you to comprehend the responsibilities of every extensionist. In addition to being required to be equipped with technical and soft abilities, it is also critical to maintain distinct professionalism in their mode of delivery. The learning kit will function as a stepping stone on your path to professionalism, equipping you with the confidence to address a wide range of difficulties regardless of the context. The EXAF’s mission and vision statements will remind you of your role as an extension professional, while the strategic fields and capacity development levels will help you define your job based on the demands of the setting in which you find yourself.</p>
                <p class="mt-2">Keywords (technical words that are crucial for you to grasp) are used in the modules, and to ensure that you get the most out of this course; keywords will be highlighted the first time they appear and specified in a box with the keywords symbol, so be sure to read the definitions of any unfamiliar terms.</p class="mt-2">
                <p>What you learn in this course will also help you understand that many skills are required of an extension practitioner to become valuable in the Agricultural Innovation system (AIS).</p>

                <div class="border border-green-400 rounded-lg p-4 shadow-md">
                  <h6 class="font-semibold">Course Objectives</h6>
                  <p class="">Agricultural extension and advisory services are dynamic professions which EXAF considers to be one of the chore skills every extensionists should possess. Hence the need for putting out this course to enlighten the skill-gap of extensionists with free acquisition of this learning opportunity.
                </p>
                </div>
                <div class="border border-green-400 rounded-lg p-4 shadow-md">
                  <h6 class="font-semibold">Assessment</h6>
                  <p>There will be engaging and practicable:</p>
                  <ul class="list-disc ml-4">
                    <li>Short Pre-Assessment test to be completed, prior to accessing the
                      learning contents for this course.</li>
                    <li>Each module will also have exercise at the end of the module.</li>
                    <li>A Post-learning evaluation test (summative assessment) needs to be
                      completed to summarily assess your general knowledge on all you’ve
                      learned from this course.</li>
                  </ul>
                </div>
                <div class="border border-green-400 rounded-lg p-4 shadow-md space-y-4">
                  <h6 class="font-semibold">Acknowledgement</h6>
                  <p class="">We acknowledge the generous support of the GFRAS for its
                    validation and access to utilize its learning tool-kits for the
                    up-skilling of the Extensionists’ service delivery capacities.</p>
                  <p>Disclaimer: The copyright owner shall not be liable for technical or
                    other errors or omissions contained herein. The reader/user accepts all
                    risks and responsibility for losses, damages, costs and other consequences
                    resulting directly or indirectly from using this information.</p>
                  <div>
                    <h4><span class="font-semibold">Enquiries:</span> Extension Africa, @ G24,
                      Abdullahi Bayero road, Railway Quarters, Kano, Kano State, Nigeria.</h4>
                    <h4><span class="font-semibold">Email:</span> info@exensionafrica.com</h4>
                  </div>
                </div>
            </div>

            <div class="mt-4 flex justify-center">
                <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-400 text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Enroll Now</a>
            </div>
        </div>
    </section>

</div>

@endsection
