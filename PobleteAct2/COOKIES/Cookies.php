<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h1> SET OF COOKIES</h1>
<body>
<?php
// Set username for "userList" cookie
$userName = "Poblete James Remuel";

// Set IT for "userCourse" cookie
$userCourse = "IT";

// Set expiration time for (3.5 hours from the current time)
$expiration_time = time() + 3.5 * 3600;

// Set the "userList" cookie with its value and expiration time
setcookie("userList", $userName, $expiration_time);

// Set the "userCourse" cookie with its value and expiration time
setcookie("userCourse", $userCourse, $expiration_time);

// Display a message if the cookie has been set
echo "Cookies have been set with the values 'Poblete James Remuel' and 'IT' and will expire in 3.5 hours.";
?>
</body>
</html>
