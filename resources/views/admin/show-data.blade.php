<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bus Schedule</title>
  </head>
  <body>
    <div class="container">
        <a href="{{url('/add-bus')}}" class="btn btn-primary my-3">Add Bus</a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
        <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.5);">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Bus code</th>
                <th scope="col">Bus Name</th>
                <th scope="col">Bus type</th>
                <th scope="col">Dep. time</th>
                <th scope="col">Arv. time</th>
                <th scope="col">Pickup Address</th>
                <th scope="col">Dropoff Address</th>
                <th scope="col">Seat</th>
                <th scope="col">Fare(taka)</th>
                <th scope="col">Action</th>

          

              </tr>
            </thead>
            <tbody>
                

                @foreach($showData as $key=>$data)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->bus_code}}</td>
                <td>{{$data->bus_name}}</td>
                <td>{{$data->bus_type}}</td>
                <td>{{$data->dep_time}}</td>
                <td>{{$data->arv_time}}</td>
                <td>{{$data->pickup_address}}</td>
                <td>{{$data->dropoff_address}}</td>
                <td>{{$data->seat}}</td>
                <td>{{$data->fare}}</td>
                <td>
                    <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/delete-data/' .$data->id)}}" onclick="return confirm('are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>

                
              </tr>
              @endforeach
             
            </tbody>
          </table>
          {{ $showData->links()}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>