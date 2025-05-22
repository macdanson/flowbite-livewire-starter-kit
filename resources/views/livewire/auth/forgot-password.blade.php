<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

    <div class="w-full bg-gray-200 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <x-auth-logo/>

            <div class="text-center">
                <p class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
                    Forgot password
                </p>
                <p class="leading-tight">
                    Enter your email to receive a password reset link
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="text-center" :status="session('status')" />

            <form class="space-y-4 md:space-y-6" wire:submit="sendPasswordResetLink">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Your Email Address</label>
                    <input type="email" wire:model="email" id="email" autofocus class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="name@company.com" required="">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Email password reset link
                </button>

                @if(Route::has('login'))
                    <div class="flex items-center justify-center">
                        <p class="text-sm font-light text-gray-700">
                            Or, return to <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline">Sign In</a>
                        </p>
                    </div>
                @endif

            </form>
        </div>
    </div>
</div>
