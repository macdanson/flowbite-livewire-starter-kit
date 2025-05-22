<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

    <div class="w-full bg-gray-200 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <x-auth-logo/>

            <div class="text-center">
                <p class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
                    Verify your email address
                </p>
                <p class="leading-tight">
                    Please verify your email address by clicking on the link we just emailed to you.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <button type="button" wire:click="sendVerification" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Resend verification email
            </button>

            @if(Route::has('logout'))
                <div class="flex items-center justify-center">
                    <p class="text-sm font-light text-gray-700">
                        Or,  <a href="{{ route('logout') }}" class="font-medium text-blue-600 hover:underline">Log out</a>
                    </p>
                </div>
            @endif

        </div>
    </div>
</div>
