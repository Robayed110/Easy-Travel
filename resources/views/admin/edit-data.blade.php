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
        <a href="{{url('/show-data')}}" class="btn btn-primary my-3">Show Bus</a>
       
        <form action="{{url('/update-data/'.$editData->id)}}" method="post"> 
            @csrf 
            <div class="form-group">
                <label for="bus_code">Bus code </label>
                <input type="text" class="form-control" name="bus_code" value="{{$editData->bus_code}}" placeholder="enter bus code">
                @error('bus_code')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bus_name">Bus Name </label>
                <input type="text" class="form-control" name="bus_name"value="{{$editData->bus_name}}" placeholder="enter bus name">
                @error('bus_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bus_type">Bus type </label>
                <input type="text" class="form-control" name="bus_type" value="{{$editData->bus_type}}" placeholder="enter bus tpye">
                @error('bus_type')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="dep_time">dep_time </label>
                <input type="text" class="form-control" name="dep_time" value="{{$editData->dep_time}}" placeholder="enter dep_time">
                @error('dep_time')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="arv_time">arv_time </label>
                <input type="text" class="form-control" name="arv_time" value="{{$editData->arv_time}}" placeholder="enter arv_time">
                @error('arv_time')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">pickup_address</label>
                <input type="text" class="form-control" name="pickup_address" value="{{$editData->pickup_address}}" placeholder="enter pickup_address">
                @error('pickup_address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">dropoff_address </label>
                <input type="text" class="form-control" name="dropoff_address" value="{{$editData->dropoff_address}}" placeholder="enter dropoff_address">
                @error('dropoff_address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">seat </label>
                <input type="number" class="form-control" name="seat" value="{{$editData->seat}}" placeholder="enter total seat">
                @error('seat')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">fare</label> </label>
                <input type="number" class="form-control" name="fare" value="{{$editData->fare}}" placeholder="enter fare">
                @error('fare')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <input type="submit" value="submit" class="btn btn-primary my-3">
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>