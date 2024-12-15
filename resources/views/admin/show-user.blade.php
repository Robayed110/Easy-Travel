<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer Info</title>
  </head>
  <body>
    <div class="container">
        <p class="my-3">Customer Information Details</p>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
        <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.5);">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>


               
              </tr>
            </thead>
            <tbody>
                

                @foreach($showUser as $key=>$data)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->user_type}}</td>

                
                <td>
                    <a href="{{url('/edit-user/'.$data->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/delete-user/' .$data->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>

                
              </tr>
              @endforeach
             
            </tbody>
          </table>
          {{ $showUser->links()}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>