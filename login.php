<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate user input
  if (empty($username) || empty($password)) {
    $_SESSION['error'] = 'Please enter both username and password.';
    header('Location: index.php');
    exit();
  }

  // Authenticate user
  $conn = mysqli_connect('192.168.0.10', 'root', 'kakokeko', 'rbpy');
  $query = "SELECT * FROM rb_usuarios WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: main.php');
    exit();
  } else {
    $_SESSION['error'] = 'Invalid username or password.';
    header('Location: index.php');
    exit();
  }
}
?>
