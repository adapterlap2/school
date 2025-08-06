<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all teacrs</title>
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
      <th scope="col">Mobile number</th>
      <th scope="col">address</th>
      <th scope="col">salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($teacher as $teacher )
    <tr>
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->created_at}}</td>
       
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->mobile_no}}</td>
        <td>{{$teacher->address}}</td>
        <td>{{$teacher->salary}}</td>
        <td><a href="{{route('getteacherid', $teacher->id)}}" >edit</a> \ <a href="{{route('deleteteacher', $teacher->id)}}">delete</a></td>
    </tr>
   
        
    @endforeach
  </tbody>
</table>
    </div>
</div>

<a href="/addteacher">click here to add teachers</a>
    
</body>
</html>