<div class="bg-ezra-green-dark h-screen flex justify-center items-center">
    {{-- @if (session()->has('success'))
        <div class="bg-red-300 p-2 rounded text-sm mt-8">
            <p class="font-bold text-green-600">{{ session()->get('success') }}</p>
        </div>
    @endif --}}

    <div class="bg-white max-w-md border border-ezra-green p-6 rounded-lg shadow-md flex flex-col">

        <div class="text-sm">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"      stroke="currentColor" class="w-16 h-16 text-ezra-green">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>

            <p>Dear kolo12, your application for the SAEP programme has been submitted successfully, you will be contacted shortly via email when your data is validated.</p>
        </div>

        <div class="flex justify-center mt-4 md:mt-12">
            <a href="/" class="bg-ezra-green text-white p-2 text-sm rounded-lg">Back home</a>
        </div>

    </div>

</div>
