<?php
  session_start();
  
  include 'pdo_connect.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register_token'])) {
      if (!empty($_POST['register_token'])) {
        
        $email = $_POST['email'];
        $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $gender = $_POST['gender'];

        // Verify that user does not already exist
        $verify_query = 'SELECT * FROM `users` WHERE email=?';
        $verify_results = dataQuery($verify_query, array($email));

        // if 0 is returned, that means no row in the table has that email
        if (count($verify_results) == 0) {
          // Insert into DB
          $query = 'INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `gender`) VALUES (?,?,?,?,?)';
          $params = array($first_name, $last_name, $email, $pw, $gender);
          $results = dataQuery($query, $params);

          header("Location: ../registration.php?success=true");
        } else {
          header("Location: ../registration.php?success=false");
        }
      }
    }
  }
?>