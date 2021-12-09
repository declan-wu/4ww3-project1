<?php
  session_start();

  include './php_helpers/pdo_connect.php';

  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $query = '';
    $params = '';
    if (isset($_GET['search-name']) && strlen($_GET['search-name']) > 0) {
      echo "hi";
      $query = "SELECT * FROM `objects` WHERE objectName LIKE ?";
      $params = array('%'.$_GET['search-name'].'%');
    } else if (isset($_GET['search-rating'])) {
      $query = "SELECT * FROM objects WHERE rating = ?";
      $rating_map = array(
          "one-star" => 1,
          "two-star" => 2,
          "three-star" => 3,
          "four-star" => 4,
          "five-star" => 5
      );
      $params = array($rating_map[$_GET['search-rating']]);
    } else {
      $query = "SELECT objectId, objectName, description, (
        3959 * acos(
            cos(radians(78.3232)) *
            cos(radians(?)) *
            cos(radians(?) - radians(65.3234)) +
            sin(radians(78.3232)) *
            sin(radians(?))
        )
      ) AS distance
      FROM Objects
      HAVING distance < 30
      ORDER BY distance
      LIMIT 0, 20";
      echo $_GET['lat'];
      echo $_GET['long'];
      $params = array($_GET['lat'], $_GET['long'], $_GET['lat']);
    }
    // Make query
    $results = dataQuery($query, $params);

    // If no results are found, send the user back to the search page (index.php)
    // if (count($results) == 0) {
    //   echo '<script>
    //     alert("No results found!");
    //     window.location.href="index.php";
    //   </script>';
    // }
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

  <script type="text/javascript">
    function initMap() {
      // Get lat and long from 
      var latlong = { lat: 43.651, lng: -79.347 };

      // Initialize our Google map
      map = new google.maps.Map(document.getElementById("map"), {
        // toronto center
        center: latlong,
        zoom: 14,
      });
    }
    function generateInitialMarkers() {
      let i = 1;
      for (pos of positions)  {
        createMarker(pos, 'Sample Object ' + i);
        i++;
      }
    }
    function createMarker(pos, t) {
      // Set content for the popup
      const contentString =
        '<div id="content">' +
        'Object name' +
        '</br>' +
        'Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br>' + 
        '<a href="./results_page.php" class="btn btn-primary">Go to object page!</a>' +
        "</div>";

      // Infowindow is used for popup upon click on marker
      var infowindow = new google.maps.InfoWindow({
        content: contentString,
      });

      var marker = new google.maps.Marker({
        position: pos,
        map,
        title: t
      });

      // Set event listener for on click action
      google.maps.event.addListener(marker, 'click', () => {
        // If infowindow is not already open, open it
        if (infowindow.getMap() == null) {
          infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
          });
        // Otherwise, when user clicks on marker while infowindow is open, close the infowindow
        } else {
          infowindow.close();
        }
      });

      // Store these created objects into a list in case we need to use it later
      infowindows.push(infowindow);
      markers.push(marker);
    }
  </script>
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