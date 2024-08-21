<?php
// content of file1.php
// echo "This is file1.php";

// <?php
// // content of file1.php
// echo "This is file1.php";
// // main.php
// include 'file1.php'; // Includes and executes file1.php
// echo "This is the main file";

<!-- form.html -->
<form action="process.php" method="get">
    <input type="text" name="username" placeholder="Enter your username">
    <input type="submit" value="Submit">
</form>


// process.php
$username = $_GET['username'];
echo "Username: " . htmlspecialchars($username);


<!-- form.html -->
<form action="process.php" method="post">
    <input type="text" name="username" placeholder="Enter your username">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Submit">
</form>


// process.php
$username = $_POST['username'];
$password = $_POST['password'];
echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Password: " . htmlspecialchars($password);




<!-- form.html -->
<form action="process.php" method="post">
    <input type="text" name="username" placeholder="Enter your username">
    <input type="submit" value="Submit">
</form>



// process.php
$username = $_REQUEST['username'];
echo "Username: " . htmlspecialchars($username);

echo $_SERVER['PHP_SELF']; // e.g., /path/to/script.php


echo $_SERVER['GATEWAY_INTERFACE']; // e.g., CGI/1.1

echo $_SERVER['SERVER_ADDR']; // e.g., 192.168.1.1


echo $_SERVER['SERVER_NAME']; // e.g., www.example.com


echo $_SERVER['SERVER_SOFTWARE']; // e.g., Apache/2.4.1 (Unix)

echo $_SERVER['SERVER_PROTOCOL']; // e.g., HTTP/1.1


echo $_SERVER['REQUEST_METHOD']; // e.g., POST


echo $_SERVER['REQUEST_TIME']; // e.g., 1377687496


echo $_SERVER['QUERY_STRING']; // e.g., page=about&section=contact


echo $_SERVER['HTTP_ACCEPT']; // e.g., text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8



echo $_SERVER['HTTP_ACCEPT_CHARSET']; // e.g., utf-8,ISO-8859-1

echo $_SERVER['HTTP_HOST']; // e.g., www.example.com


echo $_SERVER['HTTP_REFERER']; // e.g., https://www.example.com/page1

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    echo "Secure connection";
} else {
    echo "Not a secure connection";
}


echo $_SERVER['REMOTE_ADDR']; // e.g., 203.0.113.1

echo $_SERVER['REMOTE_HOST']; // e.g., client.example.com


echo $_SERVER['REMOTE_PORT']; // e.g., 54321


echo $_SERVER['SCRIPT_FILENAME']; // e.g., /var/www/html/index.php

echo $_SERVER['SERVER_ADMIN']; // e.g., webmaster@example.com

echo $_SERVER['SERVER_PORT']; // e.g., 80



echo $_SERVER['SERVER_SIGNATURE']; // e.g., Apache/2.4.1 (Unix) Server at example.com Port 80

echo $_SERVER['PATH_TRANSLATED']; // e.g., /var/www/html/index.php


echo $_SERVER['SCRIPT_NAME']; // e.g., /index.php

echo $_SERVER['SCRIPT_URI']; // e.g., https://www.example.com/index.php
?>


