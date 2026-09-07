<?php
        
    include_once 'db.php';
           
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['browser']) && !empty($_POST['fname']) && !empty($_POST['age']) && !empty($_POST['phone'])  && !empty($_POST['email'])  && !empty($_POST['city'])  && !empty($_POST['bday'])  && !empty($_POST['uname'])  && !empty($_POST['pwd'])) {
                    
            // Collect form data
            $type = $_POST["browser"];
            $name = $_POST["fname"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $city = $_POST["city"];
            $birth = $_POST["bday"];
            $username = $_POST["uname"];
            $pwd = $_POST["pwd"];
            
        
            // Hash the password for security
            $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
            
            // Insert data into the database
            $sql = "INSERT INTO members (memberType,memberName,age,phoneNumber,memberEmail,city,birthday,uname,pwd) VALUES (' $type', '$name', '$age ','$phone ', '$email ','$city ','$birth ','$username ','$hashed_password')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            
        } else {
                // If any field is empty, return an error message
                echo "All fields are required!";
            }
    }
            
            // Close connection
            $conn->close();
        
                  

        
                    
        
                
        
        
    
    

    
