<?php
// Simulated user credentials for demonstration purposes
$valid_username = "user";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simple validation
    if ($username == $valid_username && $password == $valid_password) {
        // Login successful
        session_start();
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to welcome page or dashboard
        exit;
    } else {
        // Login failed
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
</head>
<body>
    <div class="container">
        <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h2>Login</h2>
            <?php
            if (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <p class="register-link">Don't have an account? <a href="register">Register here</a></p>
        </form>
    </div>
</body>
</html>
