<section class="w-full">
    <div class="relative mb-6 w-full">
        <h1 class="font-medium text-2xl">{{ __('Settings') }}</h1>
        <h3 class="mb-6">{{ __('Manage your profile and account settings') }}</h3>
    </div>

    <x-layout.settings :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <div class="mb-2.5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Current password</label>
                <input type="password" autofocus placeholder="Current password" wire:model="current_password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
            </div>

            <div class="mb-2.5">
                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">New password</label>
                <input type="password" placeholder="New password" wire:model="password" id="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-2.5">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                <input type="password" placeholder="Confirm Password" wire:model="password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button type="submit" class="text-white bg-black hover:bg-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        {{ __('Save') }}
                    </button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-layout.settings>
</section>
