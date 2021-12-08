<?php
  session_start();
  
  include 'pdo_connect.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login_token'])) {
      if (!empty($_POST['login_token'])) {
        
        $email = $_POST['email'];
        $pw = $_POST['password'];

        // Validate email and pw
        $query = "SELECT * FROM `users` WHERE `email` = ?";
        $params = array($email);
        $results = dataQuery($query, $params);

        // There should only be one row returned because email is UNIQUE
        $hash = $results[0]['password'];

        // If password is correct, set up session
        if (password_verify($_POST['password'], $hash)) {
          $_SESSION['userId'] = $results[0]['userId'];
          $_SESSION['loggedIn'] = true; // session status updated since user logged in successfully
          header('location: ../index.php');
        } else {
          header('location: ../login.php?fail=true');
        }
      }
    }
  }
?>