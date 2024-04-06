<div class="hover:cursor-pointer w-full border-b border-white">

    <div class="bg-yellow-400 text-white rounded-lg p-2 flex justify-between items-center peer" wire:click="toggle()">
        <h4 class="font-semibold">{{ $title }}</h4>


        @if ($accordionOpen)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z" clip-rule="evenodd" />
            </svg>

        @else

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
            </svg>
        @endif



    </div>
    @if ($accordionOpen)
        <div class="p-4 transition-all duration-100 ease-out">
            <p>{!! $body !!}</p>
        </div>
    @endif

</div>
