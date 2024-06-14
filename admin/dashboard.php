<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Админ-панель</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="dashboard">

   <h1 class="heading">Админ-панель</h1>

   <div class="box-container">

      <div class="box">
         <h3>Привет!</h3>
         <a href="update_profile.php" class="btn">Обновить профиль</a>
      </div>

      <div class="box">
         <h3><span>$</span>0<span>/-</span></h3>
         <p>Денег заработано</p>
         <a href="placed_orders.php" class="btn">Посмотреть заказы</a>
      </div>

      <div class="box">
         <h3><span>$</span>0<span>/-</span></h3>
         <p>Выполненные заказы</p>
         <a href="placed_orders.php" class="btn">Посмотреть заказы</a>
      </div>

      <div class="box">
         <h3>0</h3>
         <p>Заказов обработано</p>
         <a href="placed_orders.php" class="btn">Посмотреть заказы</a>
      </div>

      <div class="box">
         <h3>0</h3>
         <p>Продуктов добавлено</p>
         <a href="products.php" class="btn">Посмотреть продукты</a>
      </div>

      <div class="box">
         <h3>0</h3>
         <p>Пользователи</p>
         <a href="users_accounts.php" class="btn">Посмотреть пользователей</a>
      </div>

      <div class="box">
         <h3>0</h3>
         <p>Админы</p>
         <a href="admin_accounts.php" class="btn">Посмотреть админов</a>
      </div>

      <div class="box">
         <h3>0</h3>
         <p>Сообщения</p>
         <a href="messagess.php" class="btn">Посмотреть сообщения</a>
      </div>

   </div>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>
