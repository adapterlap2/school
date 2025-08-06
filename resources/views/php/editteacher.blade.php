<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>\
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<h1>form</h1>
    

<div class="card " style="margin-left: 100px; margin-right: 100px;" >
  <div class="card-body">


  <form method="post" action="{{route('editteacher')}}" >

    @csrf


  <div class="form-group">
    <label for="name">Teacher Name</label>
    <input type="text" class="form-control" value="{{$teacher->id}}" name="id" readonly style="display: none;">

    <input type="text" class="form-control" value="{{$teacher->name}}" name="name" placeholder="Enter Student Name">
  </div>
  <div class="form-group">
    <label for="mobile_no">Mobile number</label>
    <input type="text" class="form-control" value="{{$teacher->mobile_no}}" name="mobile_no" placeholder="Enter Parent Name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" value="{{$teacher->address}}" name="address" placeholder="Enter Parent Mobile Number">
  </div>

  <div class="form-group">
    <label for="salary">salary</label>
    <input type="text" class="form-control" value="{{$teacher->salary}}" name="salary" placeholder="Enter Parent Mobile Number">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
 
</div>


</body>
</html>