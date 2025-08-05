<?php

    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into form (email,password,cpassword) values('$email','$password','$cpassword')";

             mysqli_query($con, $query);

            echo"<script type ='text/javascript'>alert('Successfully register')</script>";
        }
        else
        {
            echo"<script type ='text/javascript'>alert('Please enter valid information')</script>";   
        }
    }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

<style>
  * {
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #050404;
            background-image: url("https://contentgrid.homedepot-static.com/hdus/en_US/DTCCOMNEW/Articles/best-irons-hero.jpg");

            background-size: cover;
            overflow: hidden;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Outfit', sans-serif;

        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 200px;
            color: #000000;
            background: rgba(231, 197, 168, 0.231);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            font-family: 'Outfit', sans-serif;
            transition: all 0.25s ease-in-out;
            border: #000000;

        }

        input:hover {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        input[type=email] {
            width: 100%;
            border: none;
            padding: 10px;
            border-radius: 25px;

            margin: 10px 0;
        }

        input[type=email]:focus {
            outline: none;
        }

        input[type=password] {
            width: 100%;
            border: none;
            padding: 10px;
            border-radius: 25px;
            margin: 10px 0;
        }

        input[type=password]:focus {
            outline: none;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;

        }

        input[type=checkbox] {
            opacity: 0;
        }

        input[type=checkbox]+label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            display: inline-block;

        }

        [type=checkbox]+label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 15px;
            height: 15px;
            border: 2px solid #fff;
            border-radius: 5px;
            background: #fff;
        }

        input[type=checkbox]:checked+label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 15px;
            height: 15px;
            border: 2px solid rgb(222, 247, 132);
            border-radius: 5px;
            background: rgb(46, 45, 44);
        }

        input[type=checkbox]:checked+label::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 15px;
            height: 15px;
            border: 2px solid rgb(243, 192, 126);
            border-radius: 5px;
            background: rgb(15, 15, 14);
            background-size: contain;
            background-image: url("https://contentgrid.homedepot-static.com/hdus/en_US/DTCCOMNEW/Articles/best-irons-hero.jpg");
        }

        a {
            text-decoration: none;
            color: #fc7c7c;
            transition: all 0.25s ease-in-out;
        }

        a:hover {
            text-decoration: underline;
        }


        .remember-me {
            margin-right: 5em;
        }

        button {
            width: 109%;
            background: none;
            font-family: 'Outfit', sans-serif;
            color: #242323;
            margin-bottom: 20px;
            margin-top: 10px;
            padding: 10px 0px;
            border: 1px solid #fff;
            border-radius: 25px;
            transition: all 0.25s ease-in-out;
        }

        button:hover {
            background-color: rgb(7, 7, 7);
            cursor: pointer;
            border: 1px solid rgb(88, 87, 87);
            color: #f89898;
        }

        img {
            visibility: hidden;
        }

        @media only screen and (max-width: 600px) {
            .container-form {
                padding: 100px 50px;
                overflow: hidden;
                border-radius: 0px;
            }

            input[type=email] {
                width: 100%;
                border: none;
                padding: 10px;
                border-radius: 25px;
                margin: 10px 0;
            }

            input[type=password] {
                width: 100%;
                border: none;
                padding: 10px;
                border-radius: 25px;
                margin: 10px 0;
            }

            label {
                margin-left: 10px;
            }

        }

        @media only screen and (min-width: 600px) {
            .container-form {
                padding: 100px 50px;
                overflow: hidden;
                border-radius: 0px;
            }
        }

        @media only screen and (min-width: 768px) {
            .container-form {
                border-radius: 16px;
            }

        }

        @media only screen and (min-width: 992px) {
            .container-form {
                border-radius: 16px;
            }
        }

        @media only screen and (min-width: 1200px) {
            .container-form {
                padding: 200px;
                overflow: hidden;
                border-radius: 16px;
            }
        }


</style>

</head>

<body>
    <div class="container">
        <div class="child">
            <h1>Welcome </h1>
            <p>Please enter your details</p>
            <form method="post">
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" placeholder="Enter your email" required>
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" maxlength="16" placeholder="Enter Password" required>
                <br>
                <label for="cpassword">Confirm Password</label>
                <br>
                <input type="password" name="cpassword" maxlength="16" placeholder="Re-enter Password" required>
                <br>
                <button type="submit">Sign Up</button>
                <p>Have an account? <a href="login.php">Login</a></p>
            </form>
                </div>
    </div>
</body>

</html>


