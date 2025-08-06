<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                <form method="POST" action="{{ route('storeStudent') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Student Name</label>
                        <input type="text" name="name" class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white shadow-sm" required>
                    </div>

                    <div>
                        <label for="parent_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Parent Name</label>
                        <input type="text" name="parent_name" class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white shadow-sm">
                    </div>

                    <div>
                        <label for="p_mobile_no" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Parent Mobile No.</label>
                        <input type="text" name="p_mobile_no" class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white shadow-sm">
                    </div>

                    <div>
                        <label for="class" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Class</label>
                        <input type="text" name="class" class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white shadow-sm">
                    </div>

                    <div>
                        <label for="subjects" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Subjects</label>
                        <input type="text" name="subjects" class="mt-1 block w-full rounded-md dark:bg-gray-700 dark:text-white shadow-sm">
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <a href="/showallstudents" class="text-blue-500 hover:underline">Click here to view all students</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
