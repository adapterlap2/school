<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                    <!-- Login Message with Auto Hide -->
                    <div 
                        x-data="{ show: true }" 
                        x-init="setTimeout(() => show = false, 3000)" 
                        x-show="show" 
                        x-transition 
                        class="text-lg font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 p-4 rounded"
                    >
                        {{ __("You're logged in!") }}
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <a href="/addstudent" class="block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md text-center transition duration-300">
                            Click Here to Add Students
                        </a>
                        <a href="/addteacher" class="block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md text-center transition duration-300">
                            Click Here to Add Teacher
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
