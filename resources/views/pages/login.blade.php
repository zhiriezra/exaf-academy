@extends('layouts.components.auth.master')

@section('content')
    <section class="h-screen flex flex-col items-center justify-center">
        {{-- <div class="">
            <img class="rounded-2xl w-64 h-64 object-cover object-center" src="{{ asset('images/Collaboration-amico.png') }}" alt="">
        </div> --}}

        <div class="p-6 bg-gray-100 shadow-lg max-w-sm md:max-w-full rounded-lg">
            <h2 class="font-bold text-2xl text-ezra-green">Login</h2>
            <p class="text-sm mt-4 text-yellow-500">If you already don't have an account, <a href="{{ route('register')}}" class="underline font-semibold">please create an account</a>.</p>

            <form action="http://localhost/exaf-academy/login/index.php" method="POST" class="flex flex-col gap-4">
                <input name="username" required class="p-2 rounded-xl border mt-8" type="text" placeholder="username or email" value="{{ old('username') }}">
                <input name="password" required class="p-2 rounded-xl border" type="password" placeholder="password">
                <button type="submit" class="bg-ezra-green rounded-xl p-2 text-white">Login</button>
            </form>

            @if(request()->errorcode == '3')
                <div class="bg-red-300 text-red-600 p-2 rounded text-sm mt-8">
                    <strong>Whoops!</strong> Username or password is invalid, please try again!
                </div>
            @endif
        </div>
    </section>
@endsection
