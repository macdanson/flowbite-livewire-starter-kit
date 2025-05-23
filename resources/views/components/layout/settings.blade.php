<div class="flex items-start max-md:flex-col">
    <div class="mr-10 w-full pb-4 md:w-[220px]">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('settings.profile') }}" class="bg-gray-200 flex items-center p-2 {{ Route::is('settings.profile') ? 'bg-gray-800 text-gray-100' : '' }} rounded-lg hover:bg-gray-800 hover:text-gray-100 group">
                    <span class="ms-3">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings.password') }}" class="bg-gray-200 flex items-center p-2 {{ Route::is('settings.password') ? 'bg-gray-800 text-gray-100' : '' }} rounded-lg hover:bg-gray-800 hover:text-gray-100 group">
                    <span class="ms-3">Password</span>
                </a>
            </li>
        </ul>
    </div>

    <hr class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <h1 class="font-bold text-2xl">{{ $heading ?? '' }}</h1>
        <p class="">{{ $subheading ?? '' }}</p>

        <div class="mt-5 w-full max-w-lg">
            {{ $slot }}
        </div>
    </div>
</div>
