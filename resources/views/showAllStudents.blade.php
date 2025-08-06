

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-4 alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('danger'))
                <div class="mb-4 alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('danger') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-bold">Student List</h3>
                    <a href="{{ url('/addstudent') }}" class="btn btn-primary px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600">
                        Add Student
                    </a>
                </div>

                @if ($students->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">Created At</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Parent Name</th>
                                <th class="px-4 py-2 border">Mobile No.</th>
                                <th class="px-4 py-2 border">Class</th>
                                <th class="px-4 py-2 border">Subjects</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr class="border-t">
                                <td class="px-4 py-2 border">{{ $student->id }}</td>
                                <td class="px-4 py-2 border">{{ $student->created_at }}</td>
                                <td class="px-4 py-2 border">{{ $student->name }}</td>
                                <td class="px-4 py-2 border">{{ $student->parent_name }}</td>
                                <td class="px-4 py-2 border">{{ $student->p_mobile_no }}</td>
                                <td class="px-4 py-2 border">{{ $student->class }}</td>
                                <td class="px-4 py-2 border">{{ $student->subjects }}</td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('getstdid', $student->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                                    <a href="{{ route('deletestd', $student->id) }}" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p>No students found.</p>
                @endif
            </div>
        </div>
    </div>







    
</x-app-layout>
