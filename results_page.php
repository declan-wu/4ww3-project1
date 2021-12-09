<?php
  session_start();

  include './php_helpers/pdo_connect.php';

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $query = '';
    $params = '';
    if (isset($_GET['search-name'])) {
      $query = "SELECT * FROM `objects` WHERE objectName LIKE ?";
      $params = array('%'.$_GET['search-name'].'%');
    } else if (isset($_GET['search-rating'])) {
      // todo search by rating
      $query = "SELECT * FROM `objects` WHERE objectName LIKE %?%";
      $params = array($_GET['search-name']);
    } else {
      // todo search by location
      $query = "SELECT * FROM `objects` WHERE objectName LIKE %?%";
      $params = array($_GET['search-name']);
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

  <div id="map"></div>

  <!-- Container to display individual objects -->
  <div class="container">
    <div class="row">
      <!-- For each search result, create a new box containing object name+description -->
      <?php if (count($results) > 0) {
        foreach ($results as $row) { ?>
        <div class="col card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['objectName'];?></h5>
            <p class="card-text"><?php echo $row['description'];?></p>
            <!-- Go to detailed object page, dynamic based on objectId -->
            <a href="./individual_object_page.php?objectId=<?php echo $row['objectId'];?>" class="btn btn-primary">Go to object page!</a>
          </div>
        </div>
        <?php 
        }
      }
      ?>
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