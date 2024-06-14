<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Товары</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-products">

   <h1 class="heading">добавить товар</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Название товара (обязательно)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Введите название товара" name="name">
         </div>
         <div class="inputBox">
            <span>Цена товара (обязательно)</span>
            <input type="number" min="0" class="box" required max="9999999999" placeholder="Введите цену товара" onkeypress="if(this.value.length == 10) return false;" name="price">
         </div>
        <div class="inputBox">
            <span>Картинка 1 (обязательно)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        <div class="inputBox">
            <span>Картинка 2 (обязательно)</span>
            <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        <div class="inputBox">
            <span>Картинка 3 (обязательно)</span>
            <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
         <div class="inputBox">
            <span>Детали товара (обязательно)</span>
            <textarea name="details" placeholder="Введите детали товара" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="Добавить продукт" class="btn" name="add_product">
   </form>

</section>

<section class="show-products">

   <h1 class="heading">Товары</h1>

   <div class="box-container">
      <p class="empty">no products added yet!</p>
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>