<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afrexa - Home</title>
  <link rel="icon" href="{{ asset('favicon_io/favicon.ico') }}">

  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body class="max-w-screen-xl mx-auto text-ezra-dark">
    <nav class="mx-auto px-2 bg-white shadow-md">
        <div class="mx-auto flex justify-between items-center">

            <div>
                <a href="/" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity">
                    <img src="{{ asset('images/main-icon-resized.png') }}" width="200" class="w-14 md:w-24 lg:w-24" alt="logo">
                </a>
            </div>
            <div>
                <div role="menubar" class="z-50 hidden flex-col items-center gap-8 absolute right-0 left-0 top-[3.8rem] md:top-[5.8rem] bg-neutral-50 shadow-xl text-center p-6 text-md lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-end lg:w-full lg:bg-white">
                    <a href="/" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('welcome') ? 'border-b-2 border-yellow-400' : ''}}">Home</a>
                    <a href="/#programmes" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity">Programmes</a>
                    <a href="{{ route('about') }}" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('about') ? 'border-b-2 border-yellow-400' : ''}}">About Afrexa</a>
                    <a href="#" role="menuitem" class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity">Testimonials</a>
                    <a href="{{ route('login') }}" role="menuitem" class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:opacity-75 transition-opacity {{ request()->routeIs('login') ? 'border-b-2 border-yellow-400' : ''}}">Login</a>
                </div>
            </div>
            <div>
                <a href="{{ route('login') }}" role="menuitem" class="hidden lg:flex lg:justify-between items-center focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white bg-ezra-green-light text-white px-6 py-1 shadow-xl hover:shadow-none hover:bg-ezra-green transition-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                    Login
                </a>

                <button id="menu" aria-expanded="false" aria-label="Open Menu" class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-white hover:text-neutral-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

        </div>
    </nav>

    @if(request()->is('/'))

        <header class="relative bg-gray-400 bg-blend-multiply h-svh bg-[url('/public/images/banner.jpg')] bg-cover bg-center bg-no-repeat">
            <div class="gap-6 flex justify-center items-center absolute top-0 bottom-0 left-0 right-0">
                <div class="pt-14 text-white p-2">
                    <h4 class="text-4xl font-bold">Africa Agribusiness Extension Academy</h4>
                    <p class="text-md mb-6 font-semibold">Expertly crafted courses for professional extension agents across africa.</p>
                    <div class="flex justify-center">
                        <a href="{{ route('register') }}" class="hover:scale-110 bg-white text-ezra-green py-1 px-6 focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-white hover:text-ezra-green-dark transition-colors text-xl rounded-md shadow-2xl hover:shadow-none">Start learning</a>
                    </div>
                </div>

            </div>
        </header>
    @endif

    <main class="grid overflow-hidden gap-y-24">

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
                    <p class="text-sm">G24, Abdullahi Bayero Road, Railway Quarters, Kano - Nigeria.</p>
                    <p class="text-sm">Extension Africa, 4th Avenue Gwarinpa, Abuja - Nigeria.</p>
                </div>

                <div class="flex justify-center md:justify-start items-center">
                    <a href="https://www.linkedin.com/company/extension-africa/" target="_blank" class="">
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
