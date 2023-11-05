<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Retrieve-Session </h1>
<body>
<?php
// Start a new session
session_start();

// Retrieve and display the values of the session variables
if (isset($_SESSION["userId"]) && isset($_SESSION["userName"]) && isset($_SESSION["Age"])) {
    //Retrieve their values if the session variables has been set
    $userId = $_SESSION["userId"];
    $userName = $_SESSION["userName"];
    $age = $_SESSION["Age"];

    // Display the value of "userId"
    echo "userId: $userId<br>";

    // Display the value of "userName"
    echo "userName: $userName<br>";

    // Display the value of "Age"
    echo "Age: $age";
} else {
    // Display a message if the session variables are not set
    echo "Session variables not set.";
}
?>
</body>
</html>
