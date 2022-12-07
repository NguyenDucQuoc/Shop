 <!--navbar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="./view/public/img/Logo-removebg-preview.png " alt="" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Sản Phẩm</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Giới Thiệu</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Sơ lược về công ty</a></li>
              <li><a class="dropdown-item" href="#">Thành tựu của công ty</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dịch Vụ</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">CSKH</a></li>
              <li><a class="dropdown-item" href="#">Tuyển Dụng</a></li>
              <li><a class="dropdown-item" href="#">Sửa Chửa Bảo Trì Điện</a></li>
            </ul>
          </li> 
          <li class="nav-item">
            <a class="nav-link active "aria-current="page" href="login.php">Đăng Nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register.php">Đăng Ký</a>
          </li>
        </ul>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <form class="d-flex search " action="search.php" method="get">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
    </div>
  </nav>