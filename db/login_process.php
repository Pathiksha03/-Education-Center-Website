<?php
include('db.php');
session_start();  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

     
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

     
    if ($result && $password === $result['password']) {
         
        $_SESSION['user_id'] = $result['id'];
        // Redirect to register_process.php after successful login
        header('Location: ../php/register.php');
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>
