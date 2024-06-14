<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Главная</a>
         <a href="../admin/products.php">Товары</a>
         <a href="../admin/placed_orders.php">Заказы</a>
         <a href="../admin/admin_accounts.php">Админы</a>
         <a href="../admin/users_accounts.php">Пользователи</a>
         <a href="../admin/messages.php">Сообщения</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <p></p>
         <a href="../admin/update_profile.php" class="btn">Обноваить профиль</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Регистрация</a>
            <a href="../admin/admin_login.php" class="option-btn">Логин</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">Выйти</a> 
      </div>

   </section>

</header>
