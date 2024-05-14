<div class="">

    <section class="">
        <div class="flex items-center justify-center md:grid md:grid-cols-2">

            <img src="{{ asset('images/register-saep.jpg') }}" class="hidden md:block h-full w-full object-cover shadow-md overflow-hidden" alt="">

            <div class="p-6 h-screen overflow-y-auto">
                <h2 class="font-bold text-2xl text-ezra-green text-center py-6">Student Agribusiness Extension Program Registration</h2>
                <p class="text-sm mt-4 text-yellow-500">If you already have an account, <a href="{{ route('login') }}" class="font-bold hover:cursor-pointer underline">login</a>.</p>

                @if (session()->has('error'))
                    <div class="bg-red-300 p-2 rounded text-sm mt-8">
                        <p class="font-bold text-red-600">{{ session()->get('error') }}</p>
                    </div>
                @endif

                <form wire:submit.prevent="register" class="flex flex-col md:grid md:grid-cols-2 gap-4 mt-4">
                    @csrf
                    <div>
                        <input wire:model="username" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="username">
                        @error('username')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input wire:model="email" class="w-full p-2 rounded-xl border mt-2" type="email" placeholder="email">
                        @error('email')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>


                    <div>
                        <input wire:model="firstname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="firstname">
                        @error('firstname')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input wire:model="lastname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="lastname">
                        @error('lastname')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <input wire:model="phone" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="phone">
                        @error('phone')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input wire:model="institution" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="name of institution">
                        @error('institution')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="">
                        <select wire:model="current_level" id="" class="w-full p-2 rounded-xl border mt-2">
                            <option value="">Current Level</option>
                            <option value="100">100 Level</option>
                            <option value="200">200 Level</option>
                            <option value="300">300 Level</option>
                            <option value="400">400 Level</option>
                            <option value="400">500 Level</option>
                        </select>
                        @error('current_level')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <input wire:model="course" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="course of Study">
                        @error('course')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <select wire:model="how_did_learn_about_us" id="" class="w-full p-2 rounded-xl border mt-2">
                            <option value="">How did you learn about us?</option>
                            <option value="colleague">Colleague/Word of mouth</option>
                            <option value="web search">Web search</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="others">Others</option>
                        </select>
                        @error('current_level')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input wire:model="password" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="password">
                        @error('password')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input wire:model="password_confirmation" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="confirm password">
                        @error('password_confirmation')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="bg-ezra-green rounded-xl p-2 text-white col-span-2">Create Account</button>
                </form>
            </div>

        </div>

    </section>
</div>
