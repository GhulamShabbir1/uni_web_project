<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <title>about</title>
  <style>
    .heading-1 {
      font-size: 4rem;
      display: flex;
      align-items: center;
      justify-content: center;

    }

    .section-1 {
      display: flex;
      flex-direction: row;
      max-height: 750px;
      justify-content: space-between;
    }

    .sec {
      max-width: 50%;
      font-size: 23px;
      margin-left: 25px;
      padding: 20px;
      border-radius: 20px;
      margin-top: 25px;
    }


    p {
      text-align: justify;
      font-size: 19px;
    }

    button {
      border-radius: 30px;
      background-color: #2113e0;
      color: white;
    }

    @media (max-width: 480px) {
      .section-1 {
        display: flex;
        flex-direction: column;
      }
    }

    .container {
      max-width: 100%;
      margin-top: 500px;

    }
  </style>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      var readMoreText = $(".read-more").text();
      var truncatedText = readMoreText.substring(0, 150) + "...";

      $(".read-more").text(truncatedText);

      $(".read-more-button").click(function() {
        if ($(this).text() == "Read more") {
          $(this).text("Read less");
          $(".read-more").text(readMoreText);
        } else {
          $(this).text("Read more");
          $(".read-more").text(truncatedText);
        }
      });
    });
  </script>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="home.php" class="navbar-brand">
        <img src="https://baroque.pk/cdn/shop/files/LOGO_PNG_V01_2.png?v=1694417343&width=280" width="150px" height="60px" alt="">
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="p1.php">Product</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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

  <section class="section-1">
    <div class="sec">
      <h1 class="heading-1">About</h1>
      <p class="para-1">
        Baroque.pk is a leading online fashion retailer in Pakistan. It offers a wide range of clothing, shoes,
        and accessories for men, women, and children. The company was founded in 2013 and has since grown to
        become one of the most popular online shopping destinations in the country.
      </p>

      <p class="para-2">
        Baroque.pk offers a variety of payment options, including cash on delivery, credit card, and debit card.
        The company also offers free shipping on orders over a certain amount. Baroque.pk has a
        customer-friendly return and exchange policy, which makes it easy for customers to return or exchange
        items that they are not satisfied with.
      </p>

      <p class="para-3">
        Baroque.pk is a trusted and reliable online retailer that offers a wide range of high-quality products
        at competitive prices. The company has a strong commitment to customer satisfaction and provides
        excellent customer service.
      </p>
      <p>
        Baroque offers free shipping within Pakistan on orders over PKR 1,500. The store also offers a variety
        of payment options, including credit card, debit card, and cash on delivery.
        Baroque is a popular choice for Pakistani shoppers because of its wide range of products, high-quality
        products, and affordable prices. The store also offers free shipping and a variety of payment options.
      </p>
      <p>
        Baroque offers free shipping within Pakistan on orders over PKR 1,500. The store also offers a variety
        of payment options, including credit card, debit card, and cash on delivery.
        Baroque is a popular choice for Pakistani shoppers because of its wide range of products, high-quality
        products, and affordable prices. The store also offers free shipping and a variety of payment options.
      </p>
      <p class="read-more">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.
      </p>
      <button class="read-more-button">Read more</button>


    </div>
    <div>
      <div>
        <img src="https://baroque.pk/cdn/shop/files/02_Banner3_a201c425-7266-4202-b792-3412215880aa.jpg?v=1697716953&width=800" height="900px" class="img-fluid pt-15">
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

</html>