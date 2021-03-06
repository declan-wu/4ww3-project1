<?php
  session_start();
?>
<html>

<head>
  <title>Login</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="./js/validate_login.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <!-- Container with form groups for logging in -->
  <div class="container mt-4 mb-4" id="registration-page">

    <!-- Display error message if login failed -->
    <?php
      $fail = (isset($_GET['fail']));
      if ($fail == "true") {
        echo "<h4 style='margin-top:1cm; color: red'>Login failed. Please try again.</h3>";
      }
    ?>

    <form onsubmit="return validate(this)" method="post" action="./php_helpers/login_verify.php">
      <h1>Log in.</h1>
      <!-- Form group to put the label and input field together -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>

      <!-- Submit button to login -->
      <input type="hidden" name="login_token" value="logintokentest1"/>
      <button type="submit" value="Login" class="btn btn-primary mt-2">Login</button>

    </form>

  <!-- Redirect to Register page -->
  No account? <a href="./registration.php">Register here.</a>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>