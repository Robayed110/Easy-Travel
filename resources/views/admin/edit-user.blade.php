<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit User</title>
  </head>
  <body>
    <div class="container">
        <a href="{{url('/show-user')}}" class="btn btn-primary my-3">Show User</a>
       
        <form action="{{url('/update-user/'.$editUser->id)}}" method="post"> 
                    
                    @csrf
                     <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Full Name">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                     </div> 
                     
                     <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Update</button>
                     </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>