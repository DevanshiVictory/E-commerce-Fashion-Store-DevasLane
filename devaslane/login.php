  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevasLane - Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script>
        function redirectToDashboard(event) {
            event.preventDefault(); // Prevent form submission
            window.location.href = "index.php"; // Redirect to dashboard
        }
    </script>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>DevasLane</h2>
            <form onsubmit="redirectToDashboard(event)">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit">Login</button>
                </div>
                <div class="signup-link">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
