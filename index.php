<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>PRINTSHOP</title>
<link href= style.css rel= stylesheet type="text/css">
</head>
<body>
<div id="mainWrapper">
  <header>

    <div id="logo">
    PRINTSHOP
    </div>
</div>
<div class="container mt-4">
<?php
if (isset($_COOKIE["user"])):
?>

<div class="row">
  <div class="col">
    <h5>Добро пожаловать, зарегестрируйте аккаунт:</h5>
      <form action="Validation-form/check.php" method="post">
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
        <button class="btn btn-success"
        type="submit">Регистрация</button>
    </form>
  </div>
<div class="col">
    <h5>Добро пожаловать, авторизируйтесь:</h5>
        <form action="Validation-form/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
            <input type="pass" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
            <button class="btn btn-success"
            <input type="submit">Вход</button>
          </form>
        </div>
<?php
else:
?>
        <p>Добро пожаловать <?=$_COOKIE ['user']?>Чтобы выйти нажмите <a href="/exit.php"> Выход </a>.</p>
<?php endif;
?>
</div>
</div>
  </header>
  <section id="offer">

    <h2>АКЦИИ</h2>
    <p>СПЕЦ. ПРЕДЛОЖЕНИЕ КАРАНТИНА</p>
  </section>
  <div id="content">
    <section class="sidebar">

      <input type="text"  id="search" value="ПОИСК">
      <div id="menubar">
        <nav class="menu">
          <h2>Сезонное </h2>

          <hr>
          <ul>

            <li><a href="#" title="Link">ЗИМА</a></li>
            <li><a href="#" title="Link">ВЕСНА</a></li>
            <li><a href="#" title="Link">ЛЕТО</a></li>
            <li><a href="#" title="Link">ОСЕНЬ</a></li>
            <li class="notimp"><a href="#"  title="Link">В разработке</a></li>
          </ul>
        </nav>
        <nav class="menu">
          <h2>Прошлый сезон </h2>

          <hr>
          <ul>

            <li><a href="#" title="Link">ЗИМА 2019</a></li>
            <li><a href="#" title="Link">ВЕСНА 2019</a></li>
            <li><a href="#" title="Link">ЛЕТО 2019</a></li>
            <li><a href="#" title="Link">ОСЕНЬ 2019</a></li>
            <li class="notimp"><a href="#" title="Link">НЕ ПРОДАННОЕ</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="mainContent">
      <div class="productRow">
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">600Р</p>
          <p class="productContent">Товар </p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">1000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">1500Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
      </div>
      <div class="productRow">

        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">2000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">3000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">4000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
      </div>
      <div class="productRow">
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">5000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">10000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
        <article class="productInfo">
          <div><img alt="sample" src="FOTKA.jpg"></div>
          <p class="price">25000Р</p>
          <p class="productContent">Товар</p>
          <input type="button" name="button" value="Купить" class="buyButton">
        </article>
      </div>
    </section>
  </div>
</body>
  <footer>

    <div>
      <p> Авторские права:<br>Все права защищены©<br></p>
    </div>
    <div>
      <p>Дата основания сайта: 12 апреля 2020 года</p>
    </div>
    <div class="footerlinks">
      <p><a href="https://www.instagram.com/" title="Link">Instagram: </a></p>
      <p><a href="https://vk.com/" title="Link">Vk:</a></p>
      <p><a href="https://www.web-telegram.ru/" title="Link">Telegram:</a></p>
    </div>
  </footer>
</div>
</body>
</html>
