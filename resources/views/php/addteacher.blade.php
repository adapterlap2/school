<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <h1>This is the teacher form</h1>

   

<div class="card " style="margin-left: 100px; margin-right: 100px;" >
  <div class="card-body">


  <form method="post" action="{{route('storeteacher')}}">

    @csrf


  <div class="form-group">
    <label for="name">Teacher Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Teacher Name">
  </div>

  <div class="form-group">
    <label for="mobile_no">Mobile number</label>
    <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile number">
  </div>

  <div class="form-group">
    <label for="address">Teacher address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter teacher address">
  </div>

  <div class="form-group">
    <label for="salary">Salary</label>
    <input type="text" class="form-control" name="salary" placeholder="Enter Teacher salary">
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>

<a href="\teacher"><h1>show teachers</h1></a>
    
</body>
</html>