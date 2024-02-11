<?php

$host = "127.0.0.1"; 
$user = "root";  
$pass = "";  
$dbname = "bd1";  


$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    
$username = $conn->real_escape_string($_POST["username"]);
$password = $conn->real_escape_string($_POST["password"]);

    // Perform SQL query to check credentials (example query)
$sql = "SELECT * FROM personne WHERE  user = '$username' and mot_de_passe = '$password'";
$result = $conn->query($sql);

    // Check if there is a match in the database
if ($result->num_rows > 0 ) {
        // Successful login, redirect to a welcome page or perform other actions
    echo("welcome");
    
} else {
        // Invalid login, you can display an error message
    echo "Invalid username or password.";
}

    // Close the database connection
$conn->close();

?>
