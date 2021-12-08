<?php
  session_start();

  include './php_helpers/pdo_connect.php';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = '';
    $params = '';
    if (isset($_POST['search-name'])) {
      $query = "SELECT * FROM `objects` WHERE objectName LIKE ?";
      $params = array($_POST['search-name']);
    } else if (isset($_POST['search-rating'])) {
      // todo search by rating
      $query = "SELECT * FROM `objects` WHERE objectName LIKE ?";
      $params = array($_POST['search-name']);
    } else {
      // todo search by location
      $query = "SELECT * FROM `objects` WHERE objectName LIKE ?";
      $params = array($_POST['search-name']);
    }
    // Make query
    $results = dataQuery($query, $params);
  }
?>
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
      <?php if (count($results) > 0) {
        foreach ($results as $row) {
          echo $row['objectName'];
        }
      }
      ?>
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Individual Object</h5>
          <p class="card-text">Some quick description.</p>
          <!-- Go to individual object page (currently hardcoded) -->
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