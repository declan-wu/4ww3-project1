<?php
  session_start();
?>
<html>

<head>
  <title>Register</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="./js/validate_registration.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <!-- Container with form groups for registering -->
  <div class="container" id="registration-page">
    
    <!-- Display error message if registration failed earlier -->
    <?php
      $fail = (isset($_GET['fail']));
      if ($fail == "true") {
        echo "<h4 style='margin-top:1cm; color: red'> User with email already found. Please login or use a different email.</h3>";
      }
    ?>

    <form onsubmit="return validate(this)" method="post" action="./php_helpers/register_verify.php">
      <h1>Register your account.</h1>
      <!-- Form group to put the label and input field together -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>

      <div class="form-group">
        <label for="confirm-password">Confirm password:</label>
        <input type="password" class="form-control" name="confirm-password" id="confirm-pw">
      </div>

      <div class="form-group">
        <label for="first-name">First name:</label>
        <input type="text" class="form-control" name="first-name" id="first-name">
      </div>

      <div class="form-group">
        <label for="last-name">Last name:</label>
        <input type="text" class="form-control" name="last-name" id="last-name">
      </div>

      <div class="form-group">
        <label class="form-check-label" for="gender">Gender:</label>
        <input class="form-check-input" type="radio" name="gender" value="Male">Male</input>
        <input class="form-check-input" type="radio" name="gender" value="Female">Female</input>
        <input class="form-check-input" type="radio" name="gender" value="Other">Other</input>
      </div>

      <div class="row">
        <p>By creating an account you agree to our <a href="#">Terms of Service & Privacy Policy</a></p>
      </div>

      <div class="form-group">
        <input type="checkbox" name="agree-terms" id="agree-terms">
        <label for="agree-terms">I agree to the Terms of Service</label>
      </div>

      <div class="form-group">
        <input type="checkbox" name="agree-privacy" id="agree-privacy">
        <label for="agree-privacy">I agree to the Privacy Policy</label>
      </div>

      <!-- Submit button to register -->
      <input type="hidden" name="register_token" value="registertokentest1"/>
      <button type="submit" value="Register" class="btn btn-primary">Register</button>

    </form>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>