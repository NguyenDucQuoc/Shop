<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./view/public/css/home.css">
  <link rel="stylesheet" href="./view/public/css/cart.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include 'inc/navbar.php'; ?>
  <!-- ===============wrapper-content====================== -->
  <div class="wrapper-content">

    <!--=================table=================== -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">
            <input class="form-check-input check-all" type="checkbox" value="" id="flexCheckDefault">
          </th>
          <th scope="col">Sản phẩm</th>
          <th scope="col">Giá thành</th>
          <th scope="col" colspan="2">Số lượng</th>
        </tr>
      </thead>
      <tbody>
        <?php $cart_list = get_cart(); ?>
        <?php foreach ($cart_list as $order_detail) { ?>
          <tr>
            <th scope="row">1</th>
            <th scope="row">
              <input class="form-check-input check-individual" type="checkbox" value="" id="flexCheckDefault">
            </th>
            <td class="product">
              <label class="product__name"><?php echo $order_detail['name'] ?></label>
              <img class="product__image" src="<?php echo $order_detail['img'] ?>" />
            </td>
            <td><?php echo $order_detail['price'] ?> VNĐ</td>
            <td>
              <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="value" value="-1">
                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                <button type="submit">-</button>
              </form>
              <div class="h-8 w-10 h flex items-center justify-center">
                <?php echo $order_detail['quantity']; ?>
              </div>
              <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="value" value="1">
                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                <button type="submit">+</button>
              </form>
            </td>
            <td>
              <form action="cart.php" method="post">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?> ">
                <button type="submit" class="fas fa-trash"></button>
              </form>
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
    <!-- ==================payment============== -->
    <div class="payment">
      <h6 class="payment__header">
        <strong class="me-auto">Thành tiền:</strong>
      </h6>
      <div class="payment__body">
        <ul class="payment__container">
          <li class="container__total-products container__input">Tổng sản phẩm:</li>
          <li class="container__total-money container__input">Tổng tiền: <?php echo total_cart(); ?> VNĐ</li>
          <li class="container__go-to-pay container__input">
            <button class="container__go-to-pay-btn btn btn-warning">
              <i class="fa-solid fa-sack-dollar"></i>
              <a href="checkout.php"><span>Thanh toán</span></a>
            </button>
          </li>
        </ul>
      </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="./view/public/js/cart.js" ;></script>
</body>

</html>