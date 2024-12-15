<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <style>
        a{
            margin-left: 100px;
        }
        h3{
            margin-left: 100px;
        }
        p{
            margin-left: 100px;
        }
        ul{
            margin-left: 100px;

        }
     </style>
</head>
<body>
    <h3>Selected Seats:</h3>
<ul>
    <?php $seatCount = 0; ?>
    @foreach ($selectedSeats as $seat)
        <li>{{ $seat }}</li>
        <?php $seatCount++; ?>
    @endforeach
</ul>

<p>Total selected seats: {{ $seatCount }}</p>

    <a  href="{{url('/buy/'.$showData->id)}}" class="btn btn-success">Confirm</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
