<?php
    include_once 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $query = htmlspecialchars($_POST['query']);
        

        // Insert query into the database
        try {
            
            $stmt = $conn->prepare("INSERT INTO query (name, email, query) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $query);
            $stmt->execute();




            echo "Your query has been successfully submitted!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Invalid form submission.";
    }

    header("Location:help.php?sinup==success");