<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            background-image: url(photo/bus.jpg);
            background-size: 100%;
            background-position: 0px 0px;

        }

        .moto {
            margin-top: 50px;
        }

        .moto p {
            display: inline-block;
            font-family: 'Poppins';
            font-size: 40px;
            text-align: center;
            color: white;
            font-weight: bold;
            margin-top: 20px;
            margin-left: 32%;
            position: relative;

        }

        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }


        nav {
            background-color: rgb(0, 0, 0, 0.4);
            width: 100%;
            height: 80px;
            font-family: 'Times New Roman', Times, serif;

        }

        .logo {

            color: white;
            background-color: rgb(0, 0, 0, 0.4);
            font-size: 30px;
            line-height: 80px;
            padding: 0 30px;
            font-weight: bold;
            background: transparent;
        }

        nav ul {
            float: right;
            margin-right: 20px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 8px;
        }

        nav ul li a {
            color: white;
            font-size: 18px;
            padding: 4px 7px;
        }

        nav ul li a:hover {
            background-color: rgb(229, 109, 133);
            ;
            color: white;
            border-radius: 5px;

        }

        /* .btn {
            padding: 10px 60px;
            align-items: center;
            position: relative;
            background: #f16519;
            margin-left: 40%;
            margin-top: 30px;
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;

        } */


        .container {
            display: flex;
            perspective: 1000px;
            justify-content: center;
            /* Align items along the horizontal axis */
            align-items: center;
            /* Align items along the vertical axis */
            margin-bottom: 30px;
        }

        .box1 {
            background-color: #f2f2f2;
            padding: 20px;
            margin: 10px;

            width: 60%;
        }

        .bus-layout {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .seat {
            width: 70px;
            height: 30px;
            background-color: white;
            margin: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        .seat.avaiable {
            background-color: white;
        }

        .seat.selected {
            background-color: green;
        }

        .seat.sold {
            background-color: gray;
        }

        .gap {
            width: 50px;
            /* /* Adjust gap width as needed * */
        }


        .box2 {
            background-color: #f2f2f2;
            padding: 20px;
            margin: 10px;
            height: 280px;
            width: 40%;
        }



        footer {
            background-color: rgb(0, 0, 0, 0.8);
            color: #fff;
            padding: 40px 0;

        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column {
            width: 250px;
        }

        .footer-column h4 {
            font-size: 18px;
            font-weight: bold;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            color: #fff;
            text-decoration: none;
        }

        .social-media-icons {
            display: flex;
        }

        .social-media-icons li {
            margin-right: 10px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .nav1 {
            background-color: black;
        }

        .nav1.box1 ul {
            float: right;
            margin-right: 20px;
        }

        .selected-seats {
            margin-top: 20px;
        }

        .selected-seats h3 {
            margin-bottom: 10px;
        }

        .seat-map {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .seat {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }

        .seat.selected {
            background-color: #4CAF50;
            color: #fff;
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
.bus-layout {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.row {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 10px;
}
.gap {
  width: 50px; /* Adjust gap width as needed */
}

    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body>

    <div>
        <div>
            <nav>
                <label class="logo">EasyTravel</label>
                <ul>
                    <li><a href="{{url('/homepage')}}">Home</a></li>
                    <li><a href="{{url('/buy-ticket')}}">Buy Ticket</a></li>
                    <li><a href="#">Cancle Ticket</a></li>
                    <li><a href="#">Bus Reservation</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login">LogOut</a></li>

                </ul>
            </nav>
        </div>
        <div>
            <p style="margin-left: 140px; margin-top: 60px; font-size: large;font-weight: 700;color: black;">Select
                Seat:</p>
        </div>

        <div class="container">
            <div class="box1">
                <nav class="nav1">


                    <ul>
                        <li>
                            <div class="seat available">Available</div>
                            <small></small>
                        </li>
                        <li>
                            <div class="seat selected">Selected</div>
                            <small></small>
                        </li>
                        <li>
                            <div class="seat sold">Sold</div>
                            <small></small>
                        </li>
                    </ul>
                </nav>
                <h2>Available Seats</h2>
                <form action="{{url('/booking-process/'.$showData->id) }}" method="POST">
                    @csrf
                    <div class="seat-map">
                        
                        @foreach ($seats as $seat)
                        <div class="seat {{ in_array($seat, old('selectedSeats', [])) ? 'selected' : '' }}"
                            onclick="handleSeatSelection.call(this)">
                            {{ $seat }}
                        </div>
                        @endforeach
                    </div>
                    <input type="hidden" name="selectedSeats" id="selected-seats-input">
                    <button type="submit">Book Seats</button>
                </form>
                


            </div>
            <script src="{{ asset('js/booking.js') }}"></script>
            <div class="box2">
                <div class="bus-layout">
                    <div class="row">
                      <div class="seat">A1</div>
                      <div class="gap"></div>
                      <div class="seat">A2</div>
                      <div class="seat">A3</div>
                    </div>
                    <div class="row">
                        <div class="seat">B1</div>
                        <div class="gap"></div>
                        <div class="seat">B2</div>
                        <div class="seat">B3</div>
                      </div>
                      <div class="row">
                        <div class="seat">C1</div>
                        <div class="gap"></div>
                        <div class="seat">C2</div>
                        <div class="seat">C3</div>
                      </div>
                      <div class="row">
                        <div class="seat">D1</div>
                        <div class="gap"></div>
                        <div class="seat">D2</div>
                        <div class="seat">D3</div>
                      </div>
                  </div>
                  
                  
                  
            </div>

        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{ asset('js/bus-seat-selection.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>






    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h4>Contact Us</h4>
                <p>EasyTravel</p>
                <p>Jatrabari,Dhaka-1200</p>
                <p>Email: easytravel@service.bd</p>
                <p>Phone: +44 (0)123 456 7890</p>
            </div>
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="homepage">Home</a></li>
                    <li><a href="{{url('/buy-ticket')}}">Buy Ticket</a></li>
                    <li><a href="#">Cancle Ticket</a></li>
                    <li><a href="#">Bus Reservation</a></li>

                </ul>
            </div>
            <div class="footer-column">
                <h4>Social Media</h4>
                <ul class="social-media-icons">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="footer-bottom">© 2023 EasyTravel All rights reserved.</p>
    </footer>







</body>

</html>