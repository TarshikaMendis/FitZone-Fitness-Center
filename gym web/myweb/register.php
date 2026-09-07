<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>

    <style>
        body{
            background-image: url('bi2.jpg');
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
    <h2>Join with Our FitZone Fitness Center Family..</h2>

    <!-- build a registation form -->
    <form id="registerform" action="func.php" method="post">

        <label for="fname">Member Type:</label><br>
        <input list="browsers" name="browser" required>
        <datalist id="browsers">
            <option value="Customer">
            <option value="Admin">
            <option value="Management Staff">
        </datalist><br><br>
        <label for="fname">Your Name:</label><br>
        <input type="text" id="fname" name="fname" required><br><br>
        <label for="fname">Your Age:</label><br>
        <input type="text" id="fname" name="age" required><br><br>
        <label for="fname">Phone Number:</label><br>
        <input type="text" id="fname" name="phone" required><br><br>
        <label for="fname">Email Address:</label><br>
        <input type="text" id="fname" name="email" required><br><br>
        <label for="fname">City:</label><br>
        <input type="text" id="fname" name="city" required><br><br>
        <label for="datemin">Birth Day:</label>
        <input type="date" id="datemin" name="bday" required><br><br>
        <label for="fname">User Name:</label><br>
        <input type="text" id="fname" name="uname" required><br><br>
        <label for="fname">Password:</label><br>
        <input type="password" id="fname" name="pwd" required><br><br>
        <input type="submit" value="Register Now" style="background-color:blue; width:30%;">
        
    </form>

    <p style="color:white; font-size:20px">Do You alredy have an account? <a href="log.php"> Log now...</a></p>

    <footer>
        <p style="color:white; position: relative; margin-top: 10px; clear: both; background-color:black; text-align:center;">&copy;2024.FitZone Fitness Center.</p>
    </footer>

    
</body>
</html>