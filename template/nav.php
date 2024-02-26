<header>
<div class="container bg-primary-subtle">
<div class="row">
<div class="col-12">           
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">СанТехника</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>
       <?php
        session_start();
        if ($_SESSION['role'] == "1") {
        echo '<li class="nav-item"> <a class="nav-link" href="basket.php">Корзина</a>';
        echo '<li class="nav-item"> <a class="nav-link" href="peraccount.php">Личный кабинет</a>';
        echo '<li class="nav-item"> <a class="nav-link" href="exit.php">Выйти</a>';
        } 
        elseif ($_SESSION['role'] == "2") {
          echo '<li class="nav-item"> <a class="nav-link" href="orders.php">Заказы</a>';
          echo '<li class="nav-item"> <a class="nav-link" href="exit.php">Выйти</a>';
        }
        else {
          echo '<li class="nav-item"> <a class="nav-link" href="registration.php">Зарегистрироваться</a>';
        echo '<li class="nav-item"> <a class="nav-link" href="form.php">Войти</a>';
        }
        ?>
        <li class="nav-item">
        <a class="nav-link" href="aboutus.php">О нас</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</div>
</div>
</header> 