<html>

<head>
  <title>Individual Object Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./index.css" />
  <script type="text/javascript" src="./js/validate_registration.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <!-- Container with form groups for logging in -->
  <div class="container" id="registration-page">
    <form onsubmit="return validate(this)" method="post">
      <h1>Login.</h1>
      <!-- Form group to put the label and input field together -->
      <div class="form-group">
        <label for="userid">User ID:</label>
        <input type="userid" class="form-control" name="userid" id="userid">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>

      <!-- Submit button to login -->
      <input type="submit" value="Login" class="btn btn-primary"></input>

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