<?php
// Set a cookie named "user" with value "JohnDoe" that expires in 1 hour
setcookie('user', 'JohnDoe', time() + 3600, '/');



// Access the cookie value
if (isset($_COOKIE['user'])) {
    echo 'User is ' . htmlspecialchars($_COOKIE['user']);
} else {
    echo 'User cookie is not set.';
}



// Delete the cookie by setting its expiration time to the past
setcookie('user', '', time() - 3600, '/');


// Set a cookie to store the user name
setcookie('username', 'JaneDoe', time() + 86400, '/'); // Expires in 1 day



if (isset($_COOKIE['username'])) {
    echo 'Welcome back, ' . htmlspecialchars($_COOKIE['username']);
} else {
    echo 'Welcome, guest!';
}


// Set cookies to store user preferences
setcookie('theme', 'dark', time() + 86400 * 30, '/'); // Expires in 30 days
setcookie('font_size', 'large', time() + 86400 * 30, '/');



// Read the cookies and apply preferences
if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') {
    echo '<link rel="stylesheet" type="text/css" href="dark-theme.css">';
} else {
    echo '<link rel="stylesheet" type="text/css" href="light-theme.css">';
}
if (isset($_COOKIE['font_size'])) {
    echo '<style>body { font-size: ' . htmlspecialchars($_COOKIE['font_size']) . '; }</style>';
}

?>
