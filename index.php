<?php
  session_start();
?>
<html>

<head>
  <title>Home Page</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="js/search.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Header Include -->
  <?php include ("./includes/header.php")?>
  
  <!-- Background for search display -->
  <div class="bg-image" style="background-image: url('./assets/food.jpg'); height:100vh">
    <!-- Mask the background so the search bar is easier to see -->
    <div class="mask" style="background-color: rgba(0,0,0,0.7);">
      <!-- Justify search bars to center -->
      <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <h3 style="text-align: center; color: white">Restaurant Finder</h3>
        <form class="form-inline" action="results_page.php">
          <div class="input-group">
            <input class="form-control me-2" name="search-name" id="search-name" type="search" placeholder="Search by Name" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </div>
          <div class="input-group">
            <select name="search-rating" id="search-rating">
              <option value="" disabled selected>Search by Rating</option>
              <option value="one-star">1/5</option>
              <option value="two-star">2/5</option>
              <option value="three-star">3/5</option>
              <option value="four-star">4/5</option>
              <option value="five-star">5/5</option>
            </select>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </div>
        <div>
          <p class="btn btn-outline-success" onclick="getLocation()">Find Nearest</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>

</body>

</html>