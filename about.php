<?php
  session_start();
?>
<html>

<head>
  <title>About</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="js/search.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Header Include -->
  <?php include ("./includes/header.php")?>
  <div class="container" id="welcomeMsg" style="margin-bottom:50%; margin-top:1cm">
    <h1>Welcome to Restaurant Finder.</h1>
    <p>Created by: Jennifer Cheng, Declan Wu for 4WW3</p>
    <p>SPACE UNDERNEATH IS LEFT INTENTIONALLY BLANK</p>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>