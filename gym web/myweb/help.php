<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>

    <link rel="stylesheet" type="text/css" href="helpstyle.css">
</head>
<body>
    <h2>Submit Your Query</h2>

    <!-- build a form for query -->
    <form action="func3.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="query">Your Query:</label><br>
        <textarea id="query" name="query" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit" style="background-color:blue; width:30%;">
    </form>

    <footer>
        <p style="color:white; position: relative; margin-top: 330px; clear: both; background-color:black; text-align:center;">&copy;2024.FitZone Fitness Center.</p>
    </footer>
    
</body>
</html>