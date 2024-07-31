<?php
session_start(); // Start session to access $_SESSION variables

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $loggedIn = true; // Flag to indicate user is logged in
} else {
    $loggedIn = false; // User is not logged in
    // Handle not logged in scenario, redirect or display error
    die("User not logged in.");
}

// Check if form is submitted
if (isset($_POST['upload'])) {
    // Establish database connection
    $db = mysqli_connect("localhost", "root", "root", "database1");

    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch userID based on username
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userID = $row['id'];
    } else {
        die("User not found or database error.");
    }

    // Close the previous result set
    mysqli_free_result($result);

    // Get other form data
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $issue = isset($_POST['issue']) ? mysqli_real_escape_string($db, $_POST['issue']) : '';
    $wardID = mysqli_real_escape_string($db, $_POST['wardID']);
    $filename = $_FILES["attachment"]["name"];
    $tempname = $_FILES["attachment"]["tmp_name"];
    $folder = "./reportImage/" . $filename;

    // Check if file was uploaded
    if (!empty($filename)) {
        // Move uploaded file to destination folder
        if (move_uploaded_file($tempname, $folder)) {
            // Construct SQL query
            $sql = "INSERT INTO reports (userID, wardID, location, issue, filename) VALUES ('$userID', '$wardID', '$location', '$issue', '$filename')";

            // Execute query
            if (mysqli_query($db, $sql)) {
                echo '<script>
                alert("Report and image uploaded successfully!");
                window.location.href = "services.php";
                </script>';
            } else {
                echo '<script>
                alert("Failed to upload image! Report uploaded without image!!");
                window.location.href = "services.php";
                </script>';
            }
        } else {
            echo '<script>
            alert("Failed to move uploaded file!");
            window.location.href = "services.php";
            </script>';
        }
    } else {
        // If no file was uploaded
        $sql = "INSERT INTO reports (userID, wardID, location, issue) VALUES ('$userID', '$wardID', '$location', '$issue')";

        if (mysqli_query($db, $sql)) {
            echo '<script>
            alert("Report uploaded successfully!");
            window.location.href = "services.php";
            </script>';
        } else {
            echo '<script>
            alert("Failed to upload report!");
            window.location.href = "services.php";
            </script>';
        }
    }

    // Close database connection
    mysqli_close($db);
}
?>




