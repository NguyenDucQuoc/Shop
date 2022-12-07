<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="./view/public/css/product_details.css">

<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
	<?php include 'inc/navbar.php'; ?> 

<!--Thanh phân sản phẩm-->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
	<a class="text-reset fw-bold" href="....">Thông tin sản phẩm</a> <!--Điển link vào 3 chấm-->
</div>  
<?php $product = get_product($_GET['id']); ?>
	<div class="card mb-3">
		<div class="row g-0">
			<div class="col-md-4">
				<img src="<?php echo $product['img']; ?>" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8 ">
				<div class="title">
					<h1><?php echo $product['name']; ?></h1>
					<h5 class="card-title">Thiết bị điện tử nhập khẩu từ Mỹ</h5>
				</div>

				<div class="price-tag">
					<span class="price-tag__title"><?php echo $product['price']; ?>VNĐ</span>
					<span class="price-tag__cost"></span>
				</div>

				<div class="pictures">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
					<img src="<?php echo $product['img']; ?>" class="img-thumbnail" alt="...">
				</div>

				<form action="cart.php" method="post">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
				<div class="button-group">
					<li class="nav-item">
            			
						<button class="btn btn-warning add-to-cart" type="submit">Thêm vào giỏ hàng</button>
					
            		</li>
					
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
	integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<?php include 'inc/footer.php'; ?>  
</body>

</html>