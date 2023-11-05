<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h1> Destroy </h1>
<body>
<?php
// Start a new session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Display a message to if the session has been destroyed and all session variables have been unset
echo "Session has been destroyed, and all session variables have been unset.";
?>
</body>
</html>