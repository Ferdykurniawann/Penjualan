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
        <form id="login-form" action="login.php" method="POST">
            <h2>Login</h2>
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
    <!-- <script src="script.js"></script> -->
</body>
</html>
