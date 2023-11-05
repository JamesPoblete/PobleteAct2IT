<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Assign - Session </h1>
<body>
<?php
// Start a new session 
session_start();

// Set session variables
$_SESSION["userId"] = 19842;
$_SESSION["userName"] = "Poblete James Remuel";
$_SESSION["Age"] = "20";

// Display a message if the session variables have been set
echo "Session variables have been set.";
?>
</body>
</html>