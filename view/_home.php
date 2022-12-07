<?php require_once'core/boot.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./view/public/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'inc/navbar.php'; ?> 
  <?php include 'inc/banner.php'; ?> 

  <div class="product mt-5 container">
  <div class="row">
  <?php $product_list = get_all_products() ?>
    <?php foreach ($product_list as $product) { ?>
    <div class="col">
      <div class="card" style="width: 18rem;">
      <a href="product-detail.php?id=<?php echo $product['id']; ?>">
        <img src="<?php echo $product['img'];?>" class="card-img-top" alt="...">
      </a>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text" ><?php echo $product['price'];?></p>
            <form action="cart.php" method="post"></form>
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="productId" value="<?php echo $product['id'];?>">
            <h5 class="card-title"  ><?php echo $product['name'];?></h5>
        </div>
      </div>
    </div>
    <?php } ?>
</div>

<nav class="navbar bg-light">
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">Đăng Ký Nhận Thông Tin</span>
      <input type="text" class="form-control" placeholder="Gmail" aria-label="Gmail" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>
    <?php include 'inc/footer.php'; ?>  
</body>
</html>