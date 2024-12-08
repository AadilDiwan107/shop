<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="INDEX.PHP">Delight Collection</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Delight Collection</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kids</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Men
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="t-shirt.php">T-shirt</a></li>
              <li><a class="dropdown-item" href="shirt.php">Shirt</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="jeans.php">Jeans</a></li>
            </ul>
          </li>
        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Women
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="weswear.php">Weastern wear</a></li>
            <li><a class="dropdown-item" href="kurties.php">Fusion wear</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="sari.php">WOMEN'S Sarees</a></li>
          </ul>
        </li>
        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kids
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bboy.php">Baby BOY</a></li>
            <li><a class="dropdown-item" href="bgirl.php">Baby Girl</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="bornb.php">NEW BORN BABY</a></li>
          </ul>
        </li>
        </ul>
        <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </div>
</nav>