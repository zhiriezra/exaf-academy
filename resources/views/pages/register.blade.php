@extends('layouts.components.master')

@section('content')

<div class="container mx-auto mt-8 mb-12">

    <section class="bg-gray-50 min-h-max md:min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex shadow-lg max-w-sm md:max-w-full rounded-lg">
            <div class="sm:w-1/2 p-6">
                <h2 class="font-bold text-2xl text-ezra-green">Register</h2>
                <p class="text-sm mt-4 text-ezra-green">If you already have an account, <a href="{{ route('login') }}" class="font-bold hover:cursor-pointer underline">login</a>.</p>

                @if (session()->has('error'))
                    <div class="bg-red-300 p-2 rounded text-sm mt-8">
                        <p class="font-bold text-red-600">{{ session()->get('error') }}</p>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-300 text-red-600 p-2 rounded text-sm mt-8 md:hidden">
                        <strong>Whoops!</strong> There were some problems with your input value.
                    </div>
                @endif

                <form action="register" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <input value="{{ old('username') }}" name="username" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="username">
                        @if ($errors->has('username'))
                            <span class="text-sm text-red-400">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div>
                        <input value="{{ old('email') }}" name="email" class="w-full p-2 rounded-xl border mt-2" type="email" placeholder="email">
                        @if ($errors->has('email'))
                            <span class="text-sm text-red-400">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div>
                        <input value="{{ old('firstname') }}" name="firstname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="firstname">
                        @if ($errors->has('firstname'))
                            <span class="text-sm text-red-400">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>

                    <div>
                        <input value="{{ old('lastname') }}" name="lastname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="lastname">
                        @if ($errors->has('lastname'))
                            <span class="text-sm text-red-400">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>

                    <div>
                        <input value="{{ old('phone') }}" name="phone" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="phone">
                        @if ($errors->has('phone'))
                            <span class="text-sm text-red-400">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>


                    <div>
                        <input value="{{ old('password') }}" name="password" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="password">
                        @if ($errors->has('password'))
                            <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div>
                        <input value="{{ old('password_confirmation') }}" name="password_confirmation" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="password">
                        @if ($errors->has('password_confirmation'))
                            <span class="text-sm text-red-400">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>



                    <button type="submit" class="bg-ezra-green rounded-xl p-2 text-white">Create Account</button>
                </form>
            </div>

            <div class="hidden sm:block sm:w-1/2 p-6">
                @if ($errors->any())
                    <div class="bg-red-300 text-red-600 p-2 rounded text-sm mt-8">
                        <strong>Whoops!</strong> There were some problems with your input value.
                    </div>
                @endif

                <img class="rounded-2xl h-96 object-cover object-center" src="{{ asset('images/Solidarity-pana.png') }}" alt="">
            </div>

        </div>
    </section>
</div>

@endsection
