<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password !== $confirm)
        {
            echo "passwords do not match";
            exit;
        }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (fullname,email,username,password) VALUES ('$fullname','$email','$username','$hashedPassword')";

    if (mysqli_query($conn,$query))
        {
            header("Location: login.php");
        }else {
            echo "Error: " . mysqli_error($conn);
        }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevasLane - Sign Up</title>
    <link rel="stylesheet" href="css/login.css">
    <script>
        function redirectToLogin(event) {
            event.preventDefault(); // stop form submit
            window.location.href = "login.php"; // go to login page
        }
    </script>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>Create Account</h2>

            <form action="signup.php" method="POST">
                <div class="input-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>

                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="input-group">
                    <label for="confirm">Confirm Password:</label>
                    <input type="password" id="confirm" name="confirm" required>
                </div>

                <div class="input-group">
                    <button type="submit">Sign Up</button>
                </div>

                <div class="signup-link">
                    <p>Already have an account?
                        <a href="login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
