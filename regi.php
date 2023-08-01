<!-- PHP command to link server.php file with registration form  -->
<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- CSS Code -->
    <style>
        .container {
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        body {
            background-image: url('a.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        input {
            padding-top: 15px;
            padding-right: 25px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

        .error {
            background-color: pink;
            color: red;
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Registration System</h1>
        <p>Have an account already? <a href="index.php">Log In</a></p>

        <div class="form" id="signUp">
            <form method="POST">
                <div class="error"> <?php echo $error ?> </div>

                <!--------- To check user regidtration status ------->
                <p>
                    <?php
                    if (!isset($_COOKIE["id"]) or !isset($_SESSION["id"])) {
                        echo "Please first register to proceed.";
                    }
                    ?>
                </p>
                <input type="text" name="name" placeholder="User Name"> <br> <br>
                <input type="email" name="email" placeholder="Email"> <br><br>
                <input type="password" name="password" placeholder="password"><br><br>
                <input type="password" name="repeatPassword" placeholder="Repeat Password"><br><br>

                <input type="submit" name="signUp" value="Register">
            </form>
        </div>

</body>

</html>