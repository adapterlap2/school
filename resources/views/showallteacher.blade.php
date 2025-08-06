<x-app-layout>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Teachers
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           



            
            {{-- Success Message --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Danger Message --}}
            @if (session('danger'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('danger') }}
                </div>
            @endif

            {{-- Card --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-semibold">Teachers List</h3>
                    <a href="{{ url('/addteacher') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        + Add Teacher
                    </a>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Created At</th>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Mobile Number</th>
                                <th class="py-2 px-4 border-b">Address</th>
                                <th class="py-2 px-4 border-b">Salary</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacher as $teacher)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $teacher->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $teacher->created_at }}</td>
                                    <td class="py-2 px-4 border-b">{{ $teacher->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $teacher->mobile_no }}</td>
                                    <td class="py-2 px-4 border-b">{{ $teacher->address }}</td>
                                    <td class="py-2 px-4 border-b">{{ $teacher->salary }}</td>
                                    <td class="py-2 px-4 border-b">
                                     <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" onclick="edit('{{$teacher->id}}')" >EDIT</a>
                                        <a href="{{ route('deleteteacher', $teacher->id) }}" class="text-red-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
<!-- Button to trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<button type="button" class="btn btn-primary" data-bs-toggle="dd" data-bs-target="#dd">
  Launch Modal
</button>


 <div class="modal fade" id="dd" tabindex="-1" aria-labelledby="dd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dd">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="dd" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Your content here...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="dd">Close</button>
      </div>
    </div>
  </div>
</div>









<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 <script>
  function edit(value) {
        console.log(value);
        var id = value;
        $.ajax({
        type: "GET",
        url: '/getteacher/' + id,
        success: function (data) {
        $("#myModal").trigger("reset");
        console.log(data.result);
        
        $('#id').val(data.result.id);
        $('#name').val(data.result.name);
        $('#mobile_no').val(data.result.mobile_no);
        $('#address').val(data.result.parent_name);
        $('#salary').val(data.result.salary);
        
        
       
        
        },
        error: function (error) {
        console.log('Error:', error);
        }
        });
        }
  function deletefn(value) {
        console.log(value);
        var id = value;
        $.ajax({
        type: "GET",
        url: '//' + id,
        success: function (data) {
        $("#myModal").trigger("reset");
        console.log(data.result);
        
        $('#did').val(data.result.id);
        $('#dname').val(data.result.name);
       
        
       
        
        },
        error: function (error) {
        console.log('Error:', error);
        }
        });
        }
       
</script> 



</x-app-layout>



 