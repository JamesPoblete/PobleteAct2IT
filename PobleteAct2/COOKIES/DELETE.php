<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h1> Delete </h1>
<body>
<?php
// Set the expiration time of the "userList" cookie to a time in the past (1 hour ago) to delete it.
setcookie("userList", "", time() - 3600);

// Set the expiration time of the "userCourse" cookie to a time in the past (1 hour ago) to delete it.
setcookie("userCourse", "", time() - 3600);

// Display a message if the cookie has been deleted
echo "<br>Cookies have been deleted.";
?>
</body>
</html>