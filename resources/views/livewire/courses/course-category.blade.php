<div class="mx-8">
    <h4 class="text-2xl md:text-3xl font-semibold text-ezra-green">Available Self-study Courses</h4>
    <p class="mt-3 text-base">Through a series of short, interactive and engaging courses, build valuable skills, earn career credentials, and make impactful progress as an extensionist.</p>

    <div class="grid md:grid-cols-4 mt-12 gap-8 pb-2">
        @foreach ($courses as $course )
            <div class="shadow-sm hover:shadow-lg rounded-lg">
                <a href="{{ route('course.detail', ['course' => $course['shortname']]) }}">
                    <img src="{{ $course['courseimage']}}" class="h-48 w-full object-cover object-center" alt="">
                    <h4 class="font-bold text-md py-3 px-4">{{ $course['fullname'] }}</h4>
                    {{-- <p>{!!$course['summary']!!}</p> --}}
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-center">
        <a href="{{ route('course.catalogue') }}" class="bg-ezra-green hover:bg-green-600 p-2 text-white rounded-md">View Course Catalogue</a>
    </div>
</div>
