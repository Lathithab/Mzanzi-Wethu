
<?php
include "connection.php"; // Include your database connection file

session_start(); // Start or resume session

// Check if the login form is submitted
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user inputs (not a replacement for prepared statements)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // SQL query without prepared statement (vulnerable to SQL injection)
    $sql = "SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if query executed successfully
    if($result) {
        // Check number of rows returned
        $count = mysqli_num_rows($result);

        if ($count == 1){
            // Valid credentials: set session variable and redirect
            $_SESSION['username'] = $username;
            header("Location:index.php");
            exit(); // Ensure no further output is sent
        } else {
            // Invalid credentials: show alert and redirect back to login page
            echo '<script>
                alert("Login failed. Invalid username or password!!! ");
                window.location.href = "login.php";
            </script>';
            exit(); // Ensure no further output is sent
        }
    } else {
        // Query execution failed: handle error
        die('MySQL query error: ' . mysqli_error($conn));
    }
}
?>



<html><head><base href= "login.php" ><title>Mzansi Wethu - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --color-primary: #051d86;
            --color-secondary: #f39c12;
            --color-accent: #2ecc71;
            --color-background: #f5f5f5;
            --color-text: #333;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            line-height: 1.6;
            color: var(--color-text);
            background-color: var(--color-background);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        
        h1 {
            font-family: 'Ubuntu', sans-serif;
            color: var(--color-primary);
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        
        input {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        button {
            background-color: var(--color-primary);
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #3a7bd5;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 1rem;
        }
        
        .signup-link a {
            color: var(--color-primary);
            text-decoration: none;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .social-login {
            margin-top: 1.5rem;
            text-align: center;
        }
        
        .social-login p {
            margin-bottom: 0.5rem;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        
        .social-icons a {
            color: var(--color-text);
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--color-primary);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login to Mzansi Wethu</h1>
        <form action="login.php" onsubmit="return isValid()" method="POST">
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="submit" >Log In</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account?  <a class="nav-link" href="signup.php"> Sign up </a>
        </div>
        
    </div>
</body>
</html>

