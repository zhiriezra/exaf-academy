<div class="">

    <section class="">
        <div class="flex items-center justify-center md:grid md:grid-cols-3">

            <img src="{{ asset('images/farmer-graduate.jpg') }}" class="hidden md:block h-full w-full object-cover shadow-md overflow-hidden" alt="">

            <div class="p-6 h-screen overflow-y-auto col-span-2">
                <h2 class="font-bold text-2xl text-ezra-green text-center py-6">Graduate Agribusiness Extension Program Registration</h2>
                <p class="text-sm mt-4 text-yellow-500">If you already have an account, <a href="{{ route('login') }}" class="font-bold hover:cursor-pointer underline">login</a>.</p>

                @if (session()->has('error'))
                    <div class="bg-red-300 p-2 rounded text-sm mt-8">
                        <p class="font-bold text-red-600">{{ session()->get('error') }}</p>
                    </div>
                @endif

                <form wire:submit.prevent="register">
                    <div class="flex flex-col md:grid md:grid-cols-2 gap-4 mt-4">


                        @csrf
                        @if($step == 1)
                            <div>
                                <label for="" class="text-sm">Username</label>
                                <input wire:model="username" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="">
                                @error('username')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-sm">Email address</label>

                                <input wire:model="email" class="w-full p-2 rounded-xl border mt-2" type="email" placeholder="">
                                @error('email')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>


                            <div>
                                <label for="" class="text-sm">First name</label>

                                <input wire:model="firstname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="">
                                @error('firstname')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-sm">Last name</label>

                                <input wire:model="lastname" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="">
                                @error('lastname')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">Phone</label>

                                <input wire:model="phone" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="">
                                @error('phone')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                        @elseif($step == 2)
                            <div class="">
                                <label for="" class="text-sm">Highest level of education completed?</label>

                                <select wire:model="highest_level_of_education" id="" class="w-full p-2 rounded-xl border mt-2">
                                    <option value="">-- choose --</option>
                                    <option value="Doctoral degree">Doctoral degreel</option>
                                    <option value="Master’s degree">Master’s degree</option>
                                    <option value="Bachelor’s degree">Bachelor’s degree</option>
                                    <option value="Secondary school">Secondary school</option>
                                    <option value="Elementary School">Elementary School</option>
                                </select>
                                @error('highest_level_of_education')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">What is your current status?</label>

                                <select wire:model="current_status" id="" class="w-full p-2 rounded-xl border mt-2">
                                    <option value="">-- choose --</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Extension Agent">Extension Agent</option>
                                    <option value="Extension Africa’s FBA">Extension Africa’s FBA</option>
                                    <option value="Retiree">Retiree</option>
                                </select>
                                @error('current_status')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">Organisation you are currently working with?</label>

                                <input wire:model="organisation" class="w-full p-2 rounded-xl border mt-2" type="text" placeholder="">
                                @error('organisation')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">How long have you worked with farmers?</label>
                                <input wire:model="how_long_worked_with_farmers" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="">
                                @error('how_long_worked_with_farmers')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">Total number of farmers you have worked with?</label>
                                <input wire:model="total_number_of_farmers_worked_with" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="">
                                @error('total_number_of_farmers_worked_with')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">Total number of farmers currently working with?</label>
                                <input wire:model="total_number_of_farmers_working_with" class="w-full p-2 rounded-xl border mt-2" type="number" placeholder="">
                                @error('total_number_of_farmers_working_with')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="text-sm">How did you learn about us?</label>
                                <select wire:model="how_did_learn_about_us" id="" class="w-full p-2 rounded-xl border mt-2">
                                    <option value="">-- choose --</option>
                                    <option value="colleague">Colleague/Word of mouth</option>
                                    <option value="web search">Web search</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="linkedin">LinkedIn</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('how_did_learn_about_us')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        @elseif($step == 3)
                            <div>
                                <label for="" class="text-sm">Password</label>
                                <input wire:model="password" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="">
                                @error('password')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-sm">Confirm password</label>
                                <input wire:model="password_confirmation" class="w-full p-2 rounded-xl border mt-2" type="password" placeholder="">
                                @error('password_confirmation')
                                    <span class="text-sm text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                    </div>

                    <div class="mt-4 flex justify-between items-center gap-4">
                        @if($step == 2 || $step == 3)
                            <div class="w-full">
                                <button type="button" wire:click="prev" class="w-full bg-ezra-green rounded-xl p-2 text-white col-span-2">Prev</button>
                            </div>
                        @endif

                        @if($step == 1 || $step == 2)
                            <div class="w-full">
                                <button type="button" wire:click="next" class="w-full bg-ezra-green rounded-xl p-2 text-white col-span-2">Next</button>
                            </div>
                        @endif

                        @if($step == 3)
                            <div class="w-full">
                                <button type="submit" class="w-full bg-ezra-green rounded-xl p-2 text-white col-span-2">Create Account</button>
                            </div>
                        @endif

                    </div>

                </form>
            </div>

        </div>

    </section>
</div>
