<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h1> Retrieve </h1>
<body>
<?php
// Check if the "userList" and "userCourse" cookies are set
if (isset($_COOKIE["userList"]) && isset($_COOKIE["userCourse"])) {
    // Retrieve the values if both cookies has been set
    $userList = $_COOKIE["userList"];
    $userCourse = $_COOKIE["userCourse"];

    // Display the value of "userList"
    echo "<br> Value of userList: " . $userList . "<br>";

    // Display the value of "userCourse"
    echo "<br> Value of userCourse: " . $userCourse;
} else {
    // Display a message if the cookies has not been set
    echo "<br> Cookies not set.";
}
?>
</body>
</html>
