<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afrexa - Home</title>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body class="max-w-screen-2xl mx-auto text-ezra-dark">
    <nav class="mx-auto px-2 bg-white shadow-md">
        <div class="mx-auto flex justify-between items-center">
            <a href="/" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity">
                <img src="{{ asset('images/main-icon-resized.png') }}" width="200" class="w-14 md:w-24 lg:w-24" alt="logo">
            </a>

            <button id="menu" aria-expanded="false" aria-label="Open Menu" class="md:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:text-neutral-600 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <div role="menubar" class="hidden flex-col items-center gap-8 absolute right-0 left-0 top-[3.8rem] bg-neutral-50 shadow-xl text-center p-6 text-lg md:flex md:flex-row md:static md:shadow-none md:justify-end md:w-full md:bg-white">
                <a href="/" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('welcome') ? 'border-b-2 border-yellow-400' : ''}}">Home</a>
                <a href="{{ route('about') }}" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('about') ? 'border-b-2 border-yellow-400' : ''}}">About Afrexa</a>
                <a href="{{ route('login') }}" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('login') ? 'border-b-2 border-yellow-400' : ''}}">Login</a>
                <a href="{{ route('register') }}" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white bg-yellow-500 text-white px-6 py-1 shadow-xl hover:shadow-none transition-shadow">Join for Free</a>
            </div>

        </div>
    </nav>

    @if(request()->is('/'))
        <header class="p-6 bg-ezra-green">
            <div class="container mx-auto md:flex justify-around gap-6 items-center text-white">
                <div class="md:flex justify-center hidden">
                    <img src="{{ asset('images/farmer-agent-phone-smiling-scaled.png')}}" class="w-60 md:w-72" alt="">
                </div>

                <div class="space-y-4 text-center md:text-left">
                    <h4 class="text-[40px] font-bold">Africa Agribusiness Extension Academy</h4>
                    <p class="text-lg ">Expertly crafted courses for all stakeholders across the Agro-allied value chain.</p>
                    {{-- <a href="{{ route('register') }}" class="bg-white text-ezra-green py-1 px-6 focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-white hover:text-ezra-green-dark transition-colors text-xl rounded-md shadow-lg hover:shadow-none">Start learning</a> --}}
                </div>
            </div>
        </header>
    @endif

    <main class="grid gap-12 sm:gap-16 md:gap-18 lg:gap-20 overflow-hidden">

        @yield('content')

    </main>

    <footer class="bg-ezra-green-dark text-white py-4">
        <div class="space-y-8 md:space-y-0 px-6 md:grid md:grid-cols-2 md:items-start">
            <div class="container mx-auto flex justify-center space-x-4 md:justify-start md:gap-4 md:colspan-1">
                <a href="#" class="hover:text-neutral-400">Contact</a>
                <a href="#" class="hover:text-neutral-400">Terms and Services</a>
                <a href="#" class="hover:text-neutral-400">Privacy Policy</a>
            </div>

            <div class="md:colspan-1 md:grid md:justify-end">
                <div class="text-start md:text-start text-sm">
                    <p>(+234) 907 666 065</p>
                    <p>info@extensionafrica.com</p>
                    <p class="text-sm text-yellow-300">G24, Abdullahi Bayero Road, Railway Quarters, Kano - Nigeria.</p>
                    <p class="text-sm text-yellow-300">G24, 4th Avenue Gwarinpa, Abuja - Nigeria.</p>
                </div>

                <div class="flex justify-center md:justify-start items-center">
                    <a href="" class="">
                        <img src="{{asset('images/icons8-linkedin.svg')}}" alt="">
                    </a>

                    <a href="" class="">
                        <img src="{{asset('images/icons8-twitter.svg')}}" alt="">
                    </a>

                    <a href="" class="">
                        <img src="{{asset('images/icons8-facebook.svg')}}" alt="">
                    </a>
                </div>

            </div>
        </div>
        <div class="px-6 pt-8 text-center text-sm text-neutral-400">
            {{ date('Y') }} All Rights Reserved Extension Africa
        </div>
    </footer>
    @livewireScripts
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>
