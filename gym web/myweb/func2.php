<?php
    include_once 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['browser']) && !empty($_POST['uname']) && !empty($_POST['pwd'])) {
                    
            // Collect form data
            $type = $_POST["browser"];
            $username = $_POST["uname"];
            $pwd = $_POST["pwd"];
            // Hash the password for security
            $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);


            //make shure that the user inputs are same to the given details that mentioned in below.
            
            if ($type === "Admin" && ($username !== "adminlog" || $pwd !== "ABC")) {
                echo "<script>alert('Invalid username or password for Admin');</script>";
                exit();  
            }
        
            if ($type === "Management Staff" && ($username !== "stafflog" || $pwd !== "EFG")) {
                echo "<script>alert('Invalid username or password for Management Staff');</script>";
                exit();  
            }
            
            // Insert data into the database
            $sql = "INSERT INTO logins (memberType,uname,pwd) VALUES (' $type', '$username ','$hashed_password')";
            
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






            
        
            
            
                
    
    



    

    
   
            
    

    
    