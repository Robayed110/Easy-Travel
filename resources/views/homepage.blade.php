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

        .btn {
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

        }

        .popup {
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%)scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.5s, top 0.5s;

        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%)scale(1);
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }

        .form1 {
            margin: 100px;
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

        input#how_to_buy {
            align-items: center;
            margin-top: 20px;
            margin-left: 30px;

            width: 200px;
            padding: 7px;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 600;
            border: none;
            border-radius: 3px;
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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
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


        <div class="moto">
            <p>More Routes, More Tickets!</p>
            <br>
            <p>No 1 Online Ticketing Platform!</p>
        </div>

        <div>
            <form class="form1">
                
                <div class="container">
                    <button type="submit" class="btn" onclick="openPopup()">How to Buy</button>
                    <div class="popup" id="popup">
                        <h2>Process of Buying Ticket</h2>
                        <p>1.first go to login section and login into your account.</p>
                        <p>2.if you don't have any account,please register first</p>
                        <p>3.then go to Buy Ticket section.</p>
                        <p>4.search your desired route and bus</p>
                        <p>5.select Available seats </p>
                        <p>6.Buy ticket and pay your bill</p>
                        <button type="button" onclick="closePopup()">Ok</button>
                    </div>
                </div>
            </form>
        </div>
        <script>
            let popup = document.getElementById("popup");
    
            function openPopup() {
                popup.classList.add("open-popup");
            }
            function closePopup() {
                popup.classList.remove("open-popup");
            }
        </script>
        
    </div>
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