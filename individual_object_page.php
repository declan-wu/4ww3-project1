<html>

<head>
  <title>Individual Object Page</title>
  <?php include("./includes/head.php")?>
  <script type="text/javascript" src="js/map_functions.js"></script>
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  
  <!-- Header Include -->
  <?php include ("./includes/header.php")?>

  <div class="parallax p1" id="section-1">
    <h1 class="center">Individual Object 1</h1>
    <div id="map"></div>
  </div>

  <!-- Add picture on object page -->
  <div class="container center-video">
    <picture>
      <source media="(min-width:800px)" srcset="./assets/noodles2.jpg">
      <img src="./assets/noodles.jpg" alt="logo">
    </picture>
  </div>

  <!-- Add video on object page -->
  <div class="container center-video">
    <video width="600" controls>
      <source src="noodle_with_tofu.mov" type="video/mp4">
      Your browser does not support HTML video.
    </video>
  </div>

  <!-- Container with cards for each review -->
  <div class="container">
    <div class="row">
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Great restaurant!</h5>
          <h6 class="card-title">4/5</h6>
          <p class="card-text">I enjoyed this!</p>
          <!-- Icon for thumbs up -->
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-up-fill"
            viewBox="0 0 16 16">
            <path
              d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
          </svg>
        </div>
      </div>

      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Terrible service</h5>
          <h6 class="card-title">2/5</h6>
          <p class="card-text">The waiter was so rude.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-down-fill"
            viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>
      
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Bad Review</h5>
          <h6 class="card-title">1/5</h6>
          <p class="card-text">Blah blah blah I had a bad experience.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-up-fill"
            viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>

      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Must try</h5>
          <h6 class="card-title">5/5</h6>
          <p class="card-text">So good!</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-down-fill"
            viewBox="0 0 16 16">
            <path
              d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
          </svg>
        </div>
      </div>

      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">2/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">5/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
          </svg>
        </div>
      </div>
    
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">1/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>
    
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">4/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
          </svg>
        </div>
      </div>
    
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">3/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>
    
      <div class="col card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Review</h5>
          <h6 class="card-title">2/5</h6>
          <p class="card-text">Some description.</p>
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
            class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
            <path
              d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Reviews</h3>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Hosting</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Company Name</h3>
            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus
              elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
          </div>
          
        <p class="copyright">© 2021 TODO: our project name, All rights reserved.</p>
      </div>
    </footer>
  </div>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiwTW59OFo0h7OKrnOrfRIfKHO2S3kQtY&callback=initMapIndividual"
    async></script>


  <!-- Footer Include -->
  <div class="footer-dark">
    <?php include ("./includes/footer.php")?>
  </div>


</body>

</html>