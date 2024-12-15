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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            background-image: url(photo/bus.jpg);
            background-size: 100%;
            background-position: 0px 0px;

        }

        .moto{
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



        .form1 {
            margin-top: 30px;
            margin-bottom: 80px;
            margin-left: 100px;
            margin-right: 80px;
        }

        input#from {
            margin-top: 20px;
            margin-left: 30px;
            width: 300px;
            height: 50px;
            border: 1 px solid #ddd;
            border-radius: 5px;
            outline: 0;
            padding: 7px;
            background-color: #fff;
            box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        input#search {
            float: right;
            margin-top: 30px;
            height: 50px;
            margin-right: 10px;
            width: 200px;
            padding: 7px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            background-color: rgba(250, 100, 0, 0.8);
            color: #fff;
            cursor: pointer;
            border: 1px solid black;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;

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
            <p style="margin-left: 140px; margin-top: 60px; font-size: large;font-weight: 700;color: white;">Find Buses:</p>
        </div>


        <div>
            <form class="form1" action="{{url('/show-bus')}}" method="post" >
                @csrf
                <input type="text"  name="from" id="from" placeholder="From">
                <input type="text"  name="to" id="from" placeholder="To">

                <input type="date"  name="journydate" id="from" placeholder="Jounry Date">

                <input type="submit" value="Search" name="submit" id="search">
                
            </form>
        </div>
    </div>
    <div class="container">
        <p class="my-3" style="font-weight: 700;color: white;font-size: large;">Bus Schedule:</p>
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
                        
                        
                        <a href="{{ url('/booking/'.$data->id.'/'.$bookingDate) }}" class="btn btn-success">Booking</a>

                        
                    </td>



                </tr>
                @endforeach

            </tbody>
        </table>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






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