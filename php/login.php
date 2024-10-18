<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        .message-container {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #d4edda; /* Changed to green for success */
            color: #155724;
            padding: 10px 0;
            text-align: center;
            z-index: 1000;
            font-weight: bold;
        }
        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
        }
        @keyframes marquee {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>

    <?php
    if (isset($_SESSION['message'])) {
        echo "<div class='message-container'><div class='marquee'>" . $_SESSION['message'] . "</div></div>";
        unset($_SESSION['message']);
    }
    ?>

    <div class="auth-container">
        <div class="form-container">
            <div class="form-box login-box">
                <h2>Login</h2>
                <form action="../db/login_process.php" method="post">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                    <p class="switch-form">Don't have an account? <a href="#" onclick="showSignUp()">Sign Up</a></p>
                </form>
            </div>
            <div class="form-box sign-up-box">
                <h2>Sign Up</h2>
                <form action="../db/signup_process.php" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Sign Up</button>
                    <p class="switch-form">Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script>
        function showSignUp() {
            document.querySelector('.auth-container').classList.add('show-signup');
        }

        function showLogin() {
            document.querySelector('.auth-container').classList.remove('show-signup');
        }
    </script>
</body>
</html>
