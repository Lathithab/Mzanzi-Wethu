<?php
include "connection.php"; // Include your database connection file

session_start(); // Start or resume session

if(isset($_POST['signup'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if($password !== $confirm_password) {
        echo '<script> alert("Passwords do not match.");</script>';
        echo '<script>window.location.href = "signup.php";</script>';
        exit();
    }


    // Check if username or email already exists
    $sqlVerify = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $verifyResult = mysqli_query($conn, $sqlVerify);

    if(mysqli_num_rows($verifyResult) > 0) {
        // Username or email already exists
        echo '<script>alert("Signup failed. Username or email already exists.");</script>';
        echo '<script>window.location.href = "signup.php";</script>';
        exit();
    } else {
        // Insert new user into database
        $sqlInsert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if(mysqli_query($conn, $sqlInsert)) {
            // Successful insertion
            $_SESSION['username'] = $username;
            echo '<script>alert("Account successfully created.");</script>';
            header("Location: services.php");
            exit();
        } else {
            // Insertion failed
            echo '<script>alert("Signup failed. Please try again later.");</script>';
            echo '<script>window.location.href = "signup.php";</script>';
            exit();
        }
    }
} 
?>


<html><head><base href="signup.php"><title>Mzansi Wethu - Sign Up</title>
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
            min-height: 100vh;
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
        
        input, select {
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
        
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
        
        .login-link a {
            color: var(--color-primary);
            text-decoration: none;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .social-signup {
            margin-top: 1.5rem;
            text-align: center;
        }
        
        .social-signup p {
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
        
        <h1>Sign Up for Mzansi Wethu</h1>
        <form action="signup.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            
            <button type="submit" name= "signup" >Sign Up</button>
        </form>
        
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
        
        
    </div>
</body>
</html>