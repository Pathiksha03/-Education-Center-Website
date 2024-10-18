<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page with a message
    $_SESSION['message'] = "Please log in to register for a course.";
    header("Location: login.php");
    exit();
}

// Check if 'course' parameter is set in the URL
$course = isset($_GET['course']) ? htmlspecialchars($_GET['course']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <section class="register">
        <div class="container">
            <h2>Register for the Course</h2>
            <form action="../db/register_process.php" method="post">
                <label for="course">Course Name:</label>
                <input type="text" id="course" name="course" value="<?php echo $course; ?>" readonly>

                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit" class="cta-btn">Register</button>
            </form>
            <a href="courses.php" class="back-btn">← Back to Courses</a>
        </div>
    </section>
</body>
</html>
