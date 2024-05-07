@extends('layouts.components.master')

@section('content')

<div class="min-h-svh">

    <section>

        <div class="md:mt-8 p-6 space-y-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-ezra-green">About this Program</h2>

            <p class="">The Graduate Agribusiness Extension Program (GAEP) is designed to empower individuals at various stages of their agribusiness careers. The program equips recent graduates with the knowledge and skills needed to excel in the field, while also addressing the needs of existing Extension Agents and retirees seeking to bridge knowledge gaps and enhance their expertise.</p>

            <div class="flex flex-wrap md:flex-nowrap justify-around gap-4">

                <div class="gap-4 flex flex-col">

                    <div class="flex justify-normal items-start gap-4 p-4 rounded-lg">
                        <div class="rounded-full bg-ezra-green-light text-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">01</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Structure</h4>
                            <p class="text-sm">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptas excepturi cumque omnis suscipit ipsa corrupti odio ducimus delectus! Quas officia iste consequatur iusto praesentium, voluptate inventore voluptates hic recusandae!
                            </p>

                        </div>
                    </div>

                    <div class="flex justify-normal items-start gap-4 bg-ezra-green p-4 border shadow-md rounded-lg">
                        <div class="rounded-full bg-white w-12 h-12 flex justify-center items-center p-6">
                            <span class="font-semibold">02</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Program Duration</h4>
                            <p class="text-sm">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptas excepturi cumque omnis suscipit ipsa corrupti odio ducimus delectus! Quas officia iste consequatur iusto praesentium, voluptate inventore voluptates hic recusandae!
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
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptas excepturi cumque omnis suscipit ipsa corrupti odio ducimus delectus! Quas officia iste consequatur iusto praesentium, voluptate inventore voluptates hic recusandae!
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
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptas excepturi cumque omnis suscipit ipsa corrupti odio ducimus delectus! Quas officia iste consequatur iusto praesentium, voluptate inventore voluptates hic recusandae!
                            </p>

                        </div>
                    </div>

                </div>

                <img src="{{ asset('images/farmer-graduate.jpg') }}" alt="" class="w-full md:w-1/2 md:h-72 object-cover object-center">



                {{-- <div class="w-full">
                    @livewire('accordion', ['title' => 'Program Structure', 'body' => 'Some description about the program structure'])

                    @livewire('accordion', ['title' => 'Program duration', 'body' => '3 weeks.'])
                    @livewire('accordion', ['title' => 'Who can participate?', 'body' => 'This elearning course is open to agribusiness professionals.'])
                    @livewire('accordion', ['title' => 'Certification', 'body' => 'You will get digital badges as you progress through the modules that make up the program and upon passing a final exam after completing the program and achieving a grade of at least 60%, you will be offered a certification.'])


                </div> --}}

            </div>


            <div class="flex justify-center">
                <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-400 text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow rounded-lg">Start Learning Today</a>
            </div>
        </div>
    </section>

</div>

@endsection
