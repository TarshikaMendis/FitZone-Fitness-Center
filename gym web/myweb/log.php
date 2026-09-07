<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>

    <style>
        body{
            background-image: url('bi7.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
        h2{
            color:white;
            text-align:center;
        }
        form{
            color:white;
            text-align:center;
        }
    </style>
</head>
<body>
    <h2> Login to your account here..</h2>

    <!-- build a login form -->
    <form action="func2.php" method="post">
        <label for="fname">Member Type:</label><br>
            <input list="browsers" name="browser" required>
            <datalist id="browsers">
            <option value="Customer">
            <option value="Admin">
            <option value="Management Staff">
            </datalist><br><br>
        <input type="text" id="fname" name="uname" placeholder="User name" required><br><br>
        <input type="password" id="fname" name="pwd" placeholder="Password" required><br><br>
        <input type="submit" value="Login Now" style="background-color:blue; width:30%;" required> 
    </form>
    <p style="color:white;">Don't You Registered? <a href="register.php"> Register now...</a></p>


    <footer>
        <p style="color:white; position: relative; margin-top: 350px; clear: both; background-color:black; text-align:center;">&copy;2024.FitZone Fitness Center.</p>
    </footer>

    
</body>
</html>