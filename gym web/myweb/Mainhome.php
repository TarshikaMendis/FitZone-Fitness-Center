<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    
    <!-- connect bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        
        h1{
            margin: 10%;
            color: white;
            text-align:center;
            font-size:80px;
            background-color:black;
            
        }
        h2{
            margin:3%;
            color:white; 
        }
        div {
            
            background-image: url('gym3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
            
            
        }
        
        
    </style>
 
</head>
<body>
    <!-- connect bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div>
        <!-- add a logo to the home page -->
        <img src="logo.jpg" align="left" width="120px" height="120px">

        <!-- build navigation bar -->
        <ul class="nav justify-content-end" style= "font-size:30px">
        <li class="nav-item" >
        <a class="nav-link active" aria-current="page" href="#" >Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="facilities.php">Facilities</a>
        </li>
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Services</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="programs.php">Fitnes Programs</a></li>
        <li><a class="dropdown-item" href="blog.php">Blogs</a></li>
        <li><a class="dropdown-item" href="personal.php">Personalized Training Sessions</a></li>
        <li><a class="dropdown-item" href="group.php">Group Classes</a></li>
        <li><a class="dropdown-item" href="nutrition.php">Nutrition Counseling</a></li> 
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register Now..</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="help.php">Help</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="log.php" >Login</a>
        </li>
        </ul>

        <h1><b>FitZone Fitness Center<b></h1>
        <h2><i><u>Ignite Your Passion for Fitness........</u></i></h2>
    </div>

    
    
    <!-- connect the main2.php file to the home page -->
    <?php
        include 'main2.php';
    ?><br>


    
</body>
</html>