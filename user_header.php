
<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">Shopie<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">Главная</a>
         <a href="about.php">О нас</a>
         <a href="orders.php">Заказы</a>
         <a href="shop.php">Товары</a>
         <a href="contact.php">Контакты</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <a href="update_user.php" class="btn">Обновить профиль</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Регистрация</a>
            <a href="user_login.php" class="option-btn">Логин</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn">Выйти</a> 
         <p>Пожалуйста, войдите или зарегестрируйтесь</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Регистрация</a>
            <a href="user_login.php" class="option-btn">Логин</a>
         </div>  
         
         
      </div>

   </section>

</header>