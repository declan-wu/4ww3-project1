<html>

<head>
  <title>Results</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="./js/map_functions.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <!-- <img src="./map.jpg" class="rounded mx-auto d-block" alt="Map of Individual Object" style="max-width:80%; max-height:50%; margin-top: 1%;"> -->
  <div id="map"></div>

  <!-- Container to display individual objects -->
  <div class="container">
    <div class="row">
      <div class="col card" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-suit-diamond-fill card-img-top"
          viewBox="0 0 16 16">
          <path
            d="M2.45 7.4 7.2 1.067a1 1 0 0 1 1.6 0L13.55 7.4a1 1 0 0 1 0 1.2L8.8 14.933a1 1 0 0 1-1.6 0L2.45 8.6a1 1 0 0 1 0-1.2z" />
        </svg>
        <div class="card-body">
          <h5 class="card-title">Individual Object</h5>
          <p class="card-text">Some quick description.</p>
          <!-- Go to individual object page (currently hardcoded) -->
          <a href="./individual_object.php" class="btn btn-primary">Go to object page!</a>
        </div>
      </div>
      <div class="col card" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="card-img-top bi bi-suit-heart-fill"
          viewBox="0 0 16 16">
          <path
            d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
        </svg>
        <div class="card-body">
          <h5 class="card-title">Individual Object</h5>
          <p class="card-text">Some quick description.</p>
          <a href="./individual_object.php" class="btn btn-primary">Go to object page!</a>
        </div>
      </div>
      <div class="col card" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="card-img-top bi bi-suit-club-fill"
          viewBox="0 0 16 16">
          <path
            d="M11.5 12.5a3.493 3.493 0 0 1-2.684-1.254 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907 3.5 3.5 0 1 1-2.538-5.743 3.5 3.5 0 1 1 6.708 0A3.5 3.5 0 1 1 11.5 12.5z" />
        </svg>
        <div class="card-body">
          <h5 class="card-title">Individual Object</h5>
          <p class="card-text">Some quick description.</p>
          <a href="./individual_object.php" class="btn btn-primary">Go to object page!</a>
        </div>
        
      </div>
      <div class="col card" style="width: 18rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
          class="card-img-top bi bi-suit-spade-fill" viewBox="0 0 16 16">
          <path
            d="M7.184 11.246A3.5 3.5 0 0 1 1 9c0-1.602 1.14-2.633 2.66-4.008C4.986 3.792 6.602 2.33 8 0c1.398 2.33 3.014 3.792 4.34 4.992C13.86 6.367 15 7.398 15 9a3.5 3.5 0 0 1-6.184 2.246 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907z" />
        </svg>
        <div class="card-body">
          <h5 class="card-title">Individual Object</h5>
          <p class="card-text">Some quick description.</p>
          <a href="./individual_object.php" class="btn btn-primary">Go to object page!</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiwTW59OFo0h7OKrnOrfRIfKHO2S3kQtY&callback=initMap"
      async
    ></script>
</body>

</html>