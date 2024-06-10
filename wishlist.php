<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Список желаемого</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

   <h3 class="heading">Список желаемого</h3>

   <div class="box-container">
      <p class="empty">Список желамоего пуст</p>;
   </div>

   <div class="wishlist-total">
      <p>Итоговая цена <span>₽/-</span></p>
      <a href="shop.php" class="option-btn">Продолжить покупки</a>
      <a href="wishlist.php?delete_all" class="delete-btn">Удалить все</a>
   </div>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>