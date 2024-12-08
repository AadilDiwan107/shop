<!doctype html>
<html lang="en">

<head>
  <style>
    .carousel-item img {
      height: 50vh;
      object-fit: cover;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delight Collection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include 'nav.php'
  ?><br>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://images.unsplash.com/photo-1523251850644-39e28406e17f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="https://plus.unsplash.com/premium_photo-1674719144843-690e33f9b2f5?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-5">
    <div class="row d-flex justify-content-center flex-wrap">
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">MENS T-SHIRT</h5>
            <p class="card-text">Click view more button to see all type of T-SHIRT.</p>
            <a href="t-shirt.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://plus.unsplash.com/premium_photo-1674828601362-afb73c907ebe?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">MENS JEANS</h5>
            <p class="card-text">Click view more button to see all jeans type.</p>
            <a href="jeans.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://plus.unsplash.com/premium_photo-1683140435505-afb6f1738d11?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Mens Shirt</h5>
            <p class="card-text">Click view more button to see all Shirts.</p>
            <a href="shirt.php" class="btn btn-primary">viewiew More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.pexels.com/photos/3622624/pexels-photo-3622624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">WOMEN'S Weastern Wear</h5>
            <p class="card-text">Click view more button to see all weastern wear.</p>
            <a href="weswear.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.unsplash.com/photo-1633256410452-49cc87b88bd7?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">WOMEN'S Fusion Kurtis And Tunics</h5>
            <p class="card-text">Click view more button to see all Kurtis And Tunics.</p>
            <a href="kurties.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.pexels.com/photos/28943579/pexels-photo-28943579/free-photo-of-elegant-woman-in-traditional-indian-saree.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">WOMEN'S Sarees</h5>
            <p class="card-text">Click view more button to see all types of sarees.</p>
            <a href="sari.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://plus.unsplash.com/premium_photo-1664301653550-6e7832128aa1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Baby BOY</h5>
            <p class="card-text">Click view more button to see all Baby Boy Cloths.</p>
            <a href="bboy.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.unsplash.com/photo-1638495921443-d04043a3a008?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">Baby Girl</h5>
            <p class="card-text">CLick view more butto to see all Baby Girl Cloths.</p>
            <a href="bgirl.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 18rem, height: 20rem">
          <img src="https://images.unsplash.com/photo-1656633702381-939966720da4?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." style="width: auto; height: 20rem;">
          <div class="card-body">
            <h5 class="card-title">New Born Baby</h5>
            <p class="card-text">Click view more button to see all Born Baby Cloths.</p>
            <a href="bornb.php" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1>Hello, world!</h1>
  <?php
  include 'footer.php'
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>