<div class="mx-8">
    <h4 class="text-xl md:text-2xl font-semibold text-ezra-green">Available Self-study Courses</h4>
    <p class="mt-3 text-base">Through a series of short, interactive and engaging courses, build valuable skills, earn career credentials, and make impactful progress as an extensionist.</p>

    <div class="grid md:grid-cols-4 mt-12 gap-8 pb-2">
        @foreach ($courses as $course )
            <div class="shadow-md hover:shadow-lg hover:shadow-gray-300 hover:transition-shadow hover:duration-300 rounded-lg bg-white">
                <a href="{{ route('course.detail', ['course' => $course['shortname']]) }}">
                    <img src="{{ $course['courseimage']}}" class="h-48 w-full object-cover object-center" alt="">
                    <h4 class="font-bold text-md py-3 px-4">{{ $course['fullname'] }}</h4>
                    {{-- <p>{!!$course['summary']!!}</p> --}}
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-center">
        <a href="{{ route('course.catalogue') }}" class="text-ezra-green hover:text-ezra-green-light font-semibold text-xl p-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
            Explore courses
        </a>
    </div>
</div>
