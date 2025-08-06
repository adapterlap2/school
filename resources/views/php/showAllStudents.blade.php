<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

      @if (session('success'))
            <div class="alert alert-success" id="successMessage">
                {{ session('success') }}
            </div>
            @endif

            @if (session('danger'))
            <div class="alert alert-danger" id="dangerMessage" style="color: red;">
                {{ session('danger') }}
            </div>
            @endif
            

    <div class="card " style="margin-left: 100px; margin-right: 100px;" >
  <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Created At</th>
      <th scope="col">Name</th>
      <th scope="col">Parent Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Class</th>
      <th scope="col">Subjects</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student )
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->parent_name}}</td>
        <td>{{$student->p_mobile_no}}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->subjects}}</td>
        <td><a href="{{route('getstdid', $student->id)}}" >EDIT</a> | <a href="{{route('deletestd', $student->id)}}">Delete</a></td>
    </tr>
   
        
    @endforeach
  </tbody>
</table>
    </div>
</div>

<a href="/addstudent">Click here to add students</a>
    
</body>
</html>