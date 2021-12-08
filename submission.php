<?php
  session_start();
?>
<html>
<head>
  <title>Submit new object</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="./js/submission_location_helper.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <div class="container mt-4 mb-4">
    <form method="post" action="upload-to-s3.php" enctype="multipart/form-data">
      <h1>Submit New Object.</h1>
      <div class="form-group">
        <label for="object-name" class="form-label">Name:</label>
        <input type="text" class="form-control" placeholder="Object name" name="object-name" id="object-name" required>
      </div>
  
      <div class="form-group">
        <label for="object-description" class="form-label">Description:</label>
        <input type="text" class="form-control" placeholder="Description" name="object-description" id="object-description" required>
      </div>

      <div class="form-group">
        <label for="object-lat" class="form-label">Latitude:</label>
        <input type="number" min="-90" max="90" step="any" class="form-control" placeholder="Latitude" name="object-lat" id="object-lat" required>
      </div>
    
      <div class="form-group">
        <label for="object-long" class="form-label">Longitude:</label>
        <input type="number" min="-180" max="180" step="any" class="form-control" placeholder="Longitude" name="object-long" id="object-long" required>
      </div>
      
      <button class="btn btn-primary" onclick="getLocation()">Use current location</button>
    
      <div class="form-group">
        <label for="object-picture" class="form-label">Upload image:</label>
        <input type="file" class="form-control" name="object-picture" id="object-picture" accept="image/*">
      </div>

      <div class="form-group">
        <label for="object-picture" class="form-label">Upload video:</label>
        <input type="file" class="form-control" name="object-video" id="object-video" accept="video/*">
      </div>
    
      <button type="submit" class="btn btn-primary mt-2">Submit new object</button>
    </form>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>