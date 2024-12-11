<x-app-layout>
    <div class="flex flex-col items-center py-10 space-y-6">
        <div class="flex flex-col md:flex-row md:space-x-6 items-center">
            @include('profile.partials.update-profile-information-form')

            @include('profile.partials.update-password-form')
        </div>

        <div class="p-6 rounded-lg w-full max-w-md">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>