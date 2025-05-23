<section class="w-full">
    <div class="relative mb-6 w-full">
        <h1 class="font-medium text-2xl">{{ __('Settings') }}</h1>
        <h3 class="mb-6">{{ __('Manage your profile and account settings') }}</h3>
    </div>

    <x-layout.settings :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <div class="mb-2.5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                <input type="text" autofocus wire:model="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <div class="mb-2.5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                    <input type="email" wire:model="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <p class="text-sm text-gray-600">
                            {{ __('Your email address is unverified.') }}

                            <button class="inline-flex items-center font-medium underline hover:underline hover:underline-offset-2 hover:font-bold cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium !text-green-800">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit" class="text-white bg-black hover:bg-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-layout.settings>
</section>
