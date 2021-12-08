<html>
<head>
  <title>Submit new object</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./index.css" />
  <script type="text/javascript" src="./js/submission_location_helper.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <div class="container">
    <form>
      <legend>Submit New Object</legend>
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
    
      <button type="submit" class="btn btn-primary">Submit new object</button>
    </form>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>