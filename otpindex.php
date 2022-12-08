<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OTP Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            margin-top: 0;
            background-image: url(assets/library_pic.jpg);
            background-size: cover;
            height: 100vh;
        }

        .login-form {
            width: 340px;
            margin: 50px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            background-color:black;
            color:white;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <form method="post" action="checkotp.php">
            <h2 class="text-center">Log in</h2>
            <div class="form-group second_box">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email id" required="required">
                <span id="email_error" class="field_error"></span>
            </div>
            <div class="form-group second_box">
                <input type="text" id="otp" name="otp" class="form-control" placeholder="OTP" required="required">
                <span id="otp_error" class="field_error"></span>
            </div>
            <div class="form-group second_box">
                <button type="submit" class="btn btn-primary btn-block">Submit OTP</button>
            </div>
        </form>
    </div>


</body>

</html>