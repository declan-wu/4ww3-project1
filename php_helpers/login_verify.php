<?php
  session_start();
  
  include 'pdo_connect.php';

  // DB info
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login_token'])) {
      if (!empty($_POST['login_token'])) {
        
        $email = $_POST['email'];
        $pw = $_POST['password'];

        if (empty($email)) {
          echo "Please enter your email";
        }
        if (empty($password)) {
          echo "Please enter your password";
        } else {
          // Validate email and pw
          $query = "SELECT * FROM `users` WHERE `email` = ?";
          $params = array(email);
          $results = dataQuery($query, $params);

          // There should only be one row returned because email is UNIQUE
          $hash = $results[0]['password'];

          // If password is correct, set up session
          if (password_verify(pw, $hash) {
            $_SESSION['name'] = $results[0]['name'];
            $_SESSION['userid'] = $results[0]['userid'];
            $_SESSION['isLoggedIn'] = true; // session status updated since user logged in successfully
            header('location: index.php');
            // die();
          }
        }
      }
    }
  }

$conn->close();
?>