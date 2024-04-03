@extends('layouts.components.auth.master')

@section('content')

<div class="container mx-auto">

    <section class="h-screen flex flex-col items-center justify-center">
        <div class="p-6 bg-gray-100 shadow-lg max-w-sm md:max-w-full md:w-[768px] rounded-lg">
            <h2 class="font-bold text-2xl text-ezra-green">Register</h2>
            <p class="text-sm mt-4 text-yellow-500">If you already have an account, <a href="{{ route('login') }}" class="font-bold hover:cursor-pointer underline">login</a>.</p>

            @if (session()->has('error'))
                <div class="bg-red-300 p-2 rounded text-sm mt-8">
                    <p class="font-bold text-red-600">{{ session()->get('error') }}</p>
                </div>
            @endif

            <form action="register" method="POST" class="flex flex-col md:grid md:grid-cols-2 gap-4 mt-4">
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

                <div class="col-span-2">
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
                    <input value="{{ old('password_confirmation') }}" name="password_confirmation" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="confirm password">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-sm text-red-400">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <button type="submit" class="bg-ezra-green rounded-xl p-2 text-white col-span-2">Create Account</button>
            </form>
        </div>
    </section>
</div>

@endsection
