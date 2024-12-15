<!DOCTYPE html>
<html>
<head>
    <title>Seat Selection</title>
    <link rel="stylesheet" href="{{ asset('css/seat.css') }}">
    <style>
        .seat-container {
    display: flex;
    flex-wrap: wrap;
}

.seat {
    width: 50px;
    height: 50px;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    cursor: pointer;
}

.available {
    background-color: #fff;
}

.sold {
    background-color: #ccc;
}

.selected {
    background-color: #0f0;
}

    </style>
</head>
<body>
    <h1>Seat Selection</h1>

    <div class="seat-container">
        @foreach ($availableSeats as $seat)
            <div class="seat available" data-seat="{{ $seat }}">{{ $seat }}</div>
        @endforeach

        @foreach ($soldSeats as $seat)
            <div class="seat sold" data-seat="{{ $seat }}">{{ $seat }}</div>
        @endforeach

        @foreach ($selectedSeats as $seat)
            <div class="seat selected" data-seat="{{ $seat }}">{{ $seat }}</div>
        @endforeach
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/seat.js') }}"></script>
</body>
</html>
