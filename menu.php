<nav>
  <div class="nav-bg"></div>
  <ul>
    <?
    if (isset($_SESSION['user_nickname']) and isset($_SESSION['user_password'])) {
      if ($_SESSION['user_nickname'] == 'admin') { ?>
        <li><a href="table_people.php">Таблица поставщиков</a></li>
        <li><a href="table_orders.php">Продажа</a></li>
        <li><a href="table_products.php">Таблица продуктов</a></li>
    <?
      }
    }
    ?>
    <li><a href="products.php">Продукты</a></li>
  </ul>
</nav>
<div class="hero">
  <a href="index.php">
    <h1>Don Simon</h1>
  </a>
</div>
<div class="content-wrapper">

</div>