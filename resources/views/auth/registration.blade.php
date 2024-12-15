<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url(photo/bus.jpg);
            background-size: 100%;
            background-position: 0px 0px;

        }

        .form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100lvh;
            padding: 20px;
            padding-bottom: 60px;
        }

        .form-container form {
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 4px 7px rgb(0, 0, 0, 0.7);
            background: transparent;
            background-color: rgb(0, 0, 0, 0.6);
            font-size: 22px;
            color: #fff;
            width: 500px;

        }
        .form-container form .form-group label{
            font-size: 18px;
            text-align: left;
            display: inline;
            text-align: left;
        }
        .form-container form .form-group input,select,
        button {
            padding: 10px 15px;
            font-size: 14px;
            margin: 10px 0;
            margin-right: 10px;
            background-color: #eee;
            border-radius: 5px;
            width: 100%;
        }
        .form-container form p{
            font-size: 20px;
        }
        .form-container form .form-group .text-danger{
            font-size: 17px;
        }


    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-container" >
                
                <form action="{{route('register-user')}}" method="post">
                    <h4>Registration</h4>
                    <hr> 
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
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
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Enter Password">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                     </div>
                     <div class="form-group">
                        <select name="user_type" id="">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                     </div>
                     <div>
                        <p>Already have an account? <a href="login" style="color: red; text-decoration: none;">Login Now</a> </p>
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>