
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Контакты</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">

   <form action="" method="post">
      <h3>Опишите проблему</h3>
      <input type="text" name="name" placeholder="Введите ваше имя" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="Введите вашу почту" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="Введите ваш номер" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="Введите ваше сообщение" cols="30" rows="10"></textarea>
      <input type="submit" value="Отправить сообщение" name="send" class="btn">
   </form>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>