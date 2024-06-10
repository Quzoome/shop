<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Корзина</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products shopping-cart">

   <h3 class="heading">Корзина</h3>

   <div class="box-container">
      <p class="empty">Корзина пуста</p>;
   </div>

   <div class="cart-total">
      <p>Итоговая цена <span>$/-</span></p>
      <a href="shop.php" class="option-btn">Продолжить покупки</a>
      <a href="cart.php?delete_all" class="delete-btn">Удалить все</a>
      <a href="checkout.php" class="btn">Перейти к оплате</a>
   </div>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>