<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Booked-Ticket</title>
  </head>
  <body>
    <div class="container">
        
        <p class="my-3" style="font-weight: 700;font-size: large;">Booked-Ticket Information:</p>
        <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.5);">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User_id</th>
                <th scope="col">seat_number</th>
                <th scope="col">bus_code</th>
                <th scope="col">booking_date</th>
                
          

              </tr>
            </thead>
            <tbody>
                

                @foreach($showData as $key=>$data)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->loginiId}}</td>
                <td>{{$data->seat_number}}</td>
                <td>{{$data->bus_code}}</td>
                <td>{{$data->booking_date}}</td>
                

                
              </tr>
              @endforeach
             
            </tbody>
          </table>
          {{ $showData->links()}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>