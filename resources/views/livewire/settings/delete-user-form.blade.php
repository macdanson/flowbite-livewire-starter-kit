<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <p class="font-bold text-2xl">{{ __('Delete account') }}</p>
        <p>{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <div class="max-w-full p-3 bg-red-50 border border-red-200 rounded-lg">
        <a href="#">
            <h5 class="mb-2 font-bold tracking-tight text-red-700">Warning</h5>
        </a>
        <p class="mb-3 font-normal text-red-600">Please proceed with caution, this cannot be undone.</p>

        <!-- Modal toggle -->
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            {{ __('Delete account') }}
        </button>

        <!-- Main modal -->
        <div wire:ignore.self id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Are you sure you want to delete your account?
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <form wire:submit="deleteUser" class="space-y-6">
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="mb-2.5">
                                <label for="password" class="block mb-2 text-gray-900">Confirm Password</label>
                                <input type="password" placeholder="Confirm Password" wire:model="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="flex justify-end space-x-2 p-4 md:p-5 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-gray-200 rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10">
                                {{ __('Cancel') }}
                            </button>
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                {{ __('Delete account') }}
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
