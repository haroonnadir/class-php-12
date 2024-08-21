<?php
session_start();



session_start();
// Set session variables
$_SESSION['username'] = 'JaneDoe';
$_SESSION['email'] = 'jane.doe@example.com';


session_start();
// Access session variables
if (isset($_SESSION['username'])) {
    echo 'Username: ' . htmlspecialchars($_SESSION['username']);
} else {
    echo 'Username is not set.';
}



session_start();
// Modify session variable
$_SESSION['username'] = 'JohnDoe';


session_start();
// Unset a specific session variable
unset($_SESSION['email']);

session_start();
// Unset all session variables
session_unset();
// Destroy the session
session_destroy();


<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Choose file:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload">
</form>


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        // Get file details
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileError = $_FILES['file']['error'];
        // Define the upload directory
        $uploadDir = 'uploads/';
        $destPath = $uploadDir . basename($fileName);
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "File successfully uploaded.";
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "No file uploaded or there was an error.";
    }
} else {
    echo "Invalid request.";
}

if ($_FILES['file']['error'] != UPLOAD_ERR_OK) {
    switch ($_FILES['file']['error']) {
        case UPLOAD_ERR_INI_SIZE:
            echo "The uploaded file exceeds the maximum file size allowed.";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            echo "The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.";
            break;
        case UPLOAD_ERR_PARTIAL:
            echo "The uploaded file was only partially uploaded.";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "No file was uploaded.";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            echo "Missing a temporary folder.";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            echo "Failed to write file to disk.";
            break;
        case UPLOAD_ERR_EXTENSION:
            echo "A PHP extension stopped the file upload.";
            break;
        default:
            echo "Unknown upload error.";
    }
}


echo "This will be printed.<br>";
die("Script terminated with die().");
echo "This will not be printed.";



echo "This will be printed.<br>";
exit("Script terminated with exit().");
echo "This will not be printed.";


// Terminate with status code 1 (indicating an error)
exit(1);


$file = 'important_file.txt';

if (!file_exists($file)) {
    die("Error: The required file does not exist.");
}
// Continue with script execution if the file exists
echo "File exists, continuing script...";




$conn = mysqli_connect('localhost', 'username', 'password', 'database');

if (!$conn) {
    die("Error: Could not connect to the database. " . mysqli_connect_error());
}
// Continue with script execution if the connection is successful
echo "Database connection successful.";


?>
