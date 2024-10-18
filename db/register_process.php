<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['user_id'])) {
    header('Location: ../php/login.php'); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course = $_POST['course'];
    $name = $_POST['name'];
    $email = $_POST['email'];
   
    
    $stmt = $pdo->prepare('INSERT INTO registrations (course, name, email) VALUES (:course, :name, :email)');
    
    try {
        $stmt->execute(['course' => $course, 'name' => $name, 'email' => $email]);
        
        // JavaScript for pop-up message and redirect
        echo "<script>
            alert('Registration successful!');
            window.location.href = '../php/courses.php'; // Redirect to courses page after the message
        </script>";
        exit();
    } catch (PDOException $e) {
        
        echo "Error: " . $e->getMessage();
    }
}
?>
