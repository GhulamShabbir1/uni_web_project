<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    h1 {
      font-size: 4rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 50px; /* Added margin-top */
    }

    section {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      margin-top: 20px;
      margin-bottom: 50px;
    }

    .home_sec {
      display: flex;
      justify-content: center;
      margin-top: 30px; /* Added margin-top */
    }

    .home_sec a {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 50px;
      background: transparent;
      border-radius: 50%;
      border: 2px solid #0c0c0c;
      color: #0c0c0c;
      text-decoration: none;
      margin-right: 30px;
      transition: box-shadow 0.3s ease; /* Added transition effect */
    }

    .home_sec a:hover {
      box-shadow: 0px 0px 30px black;
    }

    .formm {
      box-shadow: 0px 0px 25px gray;
      width: 50%;
      border-radius: 30px;
      padding: 20px;
      margin-top: 30px; /* Added margin-top */
    }

    .mapouter {
      position: relative;
      text-align: center;
      width: 100%;
      height: 321px;
      margin-top: 30px; /* Added margin-top */
    }

    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      width: 100%;
      height: 321px;
    }

    .gmap_iframe {
      height: 321px !important;
    }

    .container {
      margin-top: 50px;
    }
    table {
      margin-top: 30px;
    }
  </style>
  <title>Contact</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="home.php" class="navbar-brand"> <img
          src="https://baroque.pk/cdn/shop/files/LOGO_PNG_V01_2.png?v=1694417343&width=280" width="150px" height="60px"
          alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="p1.php">Bottoms</a></li>
              <!-- <li><a class="dropdown-item" href="p2.html">Shawls</a></li>
              <li><a class="dropdown-item" href="p3.html">Dupattas</a></li> -->
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="home.php">More About</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <h1>Contact us</h1>
  <section>
    <div>
      <box-icon name='location-plus'></box-icon>
      <h3>Address</h3>
      <p>
        Gulbarg, Lahore, Pakistan
      </p>
    </div>
    <div>
      <box-icon name='phone-incoming' type='solid'></box-icon>
      <h3>By Phone</h3>
      <p>+92 335 7001111</p>
    </div>
    <div>
      <box-icon type='logo' name='gmail'></box-icon>
      <h3>By Email</h3>
      <p>
        info@baroque.pk
      </p>
    </div>
  </section>

  <!-- ... (previous HTML code) ... -->

<section>
  <form class="formm">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"><strong>Email</strong></label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label"><strong>Reviews</strong></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your review"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Submit Review</button>
  </form>
</section>

<!-- ... (remaining HTML code) ... -->


  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://maps.google.com/maps?width=406&amp;height=321&amp;hl=en&amp;q=baroque.pk&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
      </iframe>
      <a href="https://connectionsgame.org/">Connections Puzzle</a>
    </div>
  </div>

  <section>
    <div class="home_sec">
      <a href="https://facebook.com/baroquepk"><i class='bx bxl-facebook'></i></a>
      <a href="https://instagram.com/baroque_official"><i class='bx bxl-instagram'></i></a>
      <a href="https://youtube.com/@baroquepk"><i class='bx bxl-youtube'></i></a>
      <a href="https://api.whatsapp.com/send?phone=+923257001111"><i class='bx bxl-whatsapp'></i></a>
    </div>
  </section>

  <section>
    <div class="container">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th><a href="#"> ABOUT </a></th>
            <th>CUSTOMER SERVICE</th>
            <th>POLICIES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Who We Are</td>
            <td>Contact Us</td>
            <td>Privacy Policy</td>
          </tr>
          <tr>
            <td>Our Responsibility</td>
            <td>Thornton</td>
            <td>Refund Policy</td>
          </tr>
          <tr>
            <td>Service We Provide</td>
            <td>Order Tracking</td>
            <td>Shipping Policy</td>
          </tr>
          <tr>
            <td>Careers</td>
            <td>Order & Delivery</td>
            <td>Terms of Service</td>
          </tr>
          <tr>
            <td rowspan="3">Legal</td>
            <td>Exchange Information</td>
          </tr>
          <tr>
            <td>Call: +92 325 700 1111</td>
          </tr>
          <tr>
            <td>WhatsApp: +92 325 7001111</td>
          </tr>
          <tr>
            <td> © 2023 - BAROQUE</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</body>

