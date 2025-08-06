<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Teacher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <h4 class="mb-4 text-lg font-semibold text-gray-800">Enter Teacher Information</h4>

                <form method="POST" action="{{ route('storeteacher') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Teacher Name</label>
                        <input type="text" name="name" id="name" class="form-input w-full rounded-md shadow-sm border-gray-300" placeholder="Enter Teacher Name" required>
                    </div>

                    <div class="mb-4">
                        <label for="mobile_no" class="block text-gray-700 font-medium mb-2">Mobile Number</label>
                        <input type="text" name="mobile_no" id="mobile_no" class="form-input w-full rounded-md shadow-sm border-gray-300" placeholder="Enter Mobile Number" required>
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
                        <input type="text" name="address" id="address" class="form-input w-full rounded-md shadow-sm border-gray-300" placeholder="Enter Address" required>
                    </div>

                    <div class="mb-4">
                        <label for="salary" class="block text-gray-700 font-medium mb-2">Salary</label>
                        <input type="text" name="salary" id="salary" class="form-input w-full rounded-md shadow-sm border-gray-300" placeholder="Enter Salary" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700">
                            Submit
                        </button>
                        <a href="{{ route('teacher') }}" class="text-blue-600 hover:underline ml-4">Show Teachers</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
