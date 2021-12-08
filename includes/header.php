<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
      <picture>
        <source media="(min-width:1024px)" srcset="./assets/logo1.png">
        <img src="./assets/logo2.png" alt="logo">
      </picture>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./submission.php">Submit New Object</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Register</a>
        </li>
      </ul>
      <form class="form-inline pull-right" action="results_page.php">
        <div class="input-group">
          <input class="form-control me-2" type="search" placeholder="Search by Name" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <div class="input-group">
          <!-- Put search by name/rating one under the other -->
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
        </div>
      </form>
    </div>
  </div>
</nav>