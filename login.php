<?php

require_once 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

$email = strtolower($email); // Canonicalize email to lowercase

// Perform the authentication
if (authenticateUser($connection, $email, $password)) {
    echo "Successfully logged in";
    header("Location: index.php");
    session_start();                        // Start a session
    session_regenerate_id(true);            // Regenerate session ID
    $sessionId = session_id();              // Get the new session ID
    $_SESSION['sessionId'] = $sessionId;    // Store the session ID in a session variable
    exit;
} else {
    echo "Invalid email or password";
}
}
// Close the connection
$connection->close();

// Function to authenticate the user
function authenticateUser($connection, $email, $password) {
    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM account WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .login-form {
            width: 300px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #00000033;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
        }
        .register-link {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login Page</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            <input type="password" name="password" placeholder="Password" pattern="^(?=.*[A-Za-z\d@$!%*#?&]).{8,}$" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.php" class="register-link">Don't have an account? Register here</a>
    </div>
</body>
</html>
