<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Teacher
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('editteacher') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $teacher->id }}">

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" value="{{ $teacher->name }}" class="mt-1 w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" required>
                    </div>
                  
                    
                    <div class="mb-4">
                      <label class="block text-gray-700 dark:text-gray-300">Mobile Number</label>
                      <input type="text" name="mobile_no" value="{{ $teacher->mobile_no }}" class="mt-1 w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Address</label>
                        <input type="text" name="address" value="{{ $teacher->address }}" class="mt-1 w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Salary</label>
                        <input type="number" step="0.01" name="salary" value="{{ $teacher->salary }}" class="mt-1 w-full rounded-md shadow-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" required>
                    </div>
                    

                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update Teacher</button>
                </form>
            </div>
        </div>
    </div>






</x-app-layout>