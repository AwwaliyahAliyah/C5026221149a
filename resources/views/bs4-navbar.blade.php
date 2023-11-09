<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="https://www.its.ac.id/">Web ITS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://instagram.com/its_campus?igshid=MzRlODBiNWFlZA==">Instagram ITS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.youtube.com/@itseurekatv">Youtube ITS</a>
    </li>
  </ul>
</nav>
<br>

<div class="container-fluid">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <p>The navbar-expand-xl|lg|md|sm class determines when the navbar should stack vertically (on extra large, large, medium or small screens).</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="https://mcdonough.com/wp-content/uploads/2020/09/starbucks-logo-png-transparent-2025x2048.png" alt="logo" style="width:40px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/Starbucks/">Facebook Starbucks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://instagram.com/starbucks?igshid=MzRlODBiNWFlZA==">Instagram Starbucks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/Starbucks?t=4Yco1plDjbsSx4qtgpwoBA&s=08">Twitter Starbucks</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <h3>Brand / Logo</h3>
    <p>When using the .navbar-brand class on images, Bootstrap 4 will automatically style the image to fit the navbar.</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <!-- Logo -->
    <a class="navbar-brand" href="https://www.starbucks.co.id/">
      <img src="starbucks-logo.png"
      height="50px">
      </a>

    <!-- top navbar -->
    <div class="container">
      <div class="row">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.starbucks.co.id/">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.starbucks.co.id/about-us">About Us</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="https://www.starbucks.co.id/menu" id="navbardrop" data-toggle="dropdown">
          Menu
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="https://www.starbucks.co.id/menu/beverage-list">Beverages</a>
          <a class="dropdown-item" href="https://www.starbucks.co.id/menu/food-list">Food</a>
          <a class="dropdown-item" href="https://www.starbucks.co.id/menu/merchandise/seasonal">Merchandise</a>
      </div>
      </div>
      </li>

      <!-- search navbar -->
      <div class="row">
          <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>

      </div>
    </ul>
  </nav>

  <!-- isi -->
  <div>
    <img src="starbucks-photo.png" width="100%">
    <img src="starbucks-photo2.png" width="100%">
    <img src="starbucks-photo3.png" width="100%">
    <img src="starbucks-photo4.png" width="100%">
  </div>

  <!-- bottom navbar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-bottom">
      <a class="navbar-brand" href="https://www.instagram.com/starbucksindonesia/">
          <img src="instagram-logo.png"
          height="25px">
      </a>
      <a class="navbar-brand" href="https://twitter.com/SbuxIndonesia">
          <img src="twitter-logo.png"
          height="25px">
      </a>
    </nav>

</body>
</html>
