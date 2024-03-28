@extends('layouts.components.master')

@section('content')

<div class="container mx-auto mt-8 mb-12">

    <section class="bg-gray-50 min-h-max md:min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex shadow-lg max-w-sm md:max-w-full rounded-lg">
            <div class="sm:w-1/2 p-6">
                <h2 class="font-bold text-2xl text-ezra-green">Login</h2>
                <p class="text-sm mt-4 text-ezra-green">If you already don't have an account, <a href="{{ route('register')}}" class="underline font-semibold">please create an account</a>.</p>

                <form action="http://localhost/exaf-academy/login/index.php" method="POST" class="flex flex-col gap-4">
                    <input name="username" class="p-2 rounded-xl border mt-8" type="text" placeholder="username or email">
                    <input name="password" class="p-2 rounded-xl border" type="password" placeholder="password">
                    <button type="submit" class="bg-ezra-green rounded-xl p-2 text-white">Login</button>
                </form>
            </div>

            <div class="hidden sm:block sm:w-1/2 p-6">
                <img class="rounded-2xl h-96 object-cover object-center" src="{{ asset('images/Collaboration-amico.png') }}" alt="">
            </div>

        </div>
    </section>
</div>

@endsection
