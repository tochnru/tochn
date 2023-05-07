<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/fonts.css">
   <link rel="shortcut icon" href="/img/global/favicon.png" type="image/png">
   <title>Это как</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <main class="main-menu-article container">
      <div class="public-menu-article">
         <div class="img-public" style="background-image: url(/img/article/ehto-kak/geometricheskie-usloviya-v-geodezicheskikh-setyakh/public-geometricheskie-usloviya-v-geodezicheskikh-setyakh.svg);"></div>
         <a href="/ehto-kak/geometricheskie-usloviya-v-geodezicheskikh-setyakh" class="card-public">
            <div class="card-public__header">
               <img class="card-public__img" src="/img/index/quotes.svg" alt="Найти центр круга">
               <p class="card-public__title">Геометрические условия в геодезических сетях</p>
            </div>
            <p class="card-public__description">Существует несколько видов геометрических условий, которые возникают в треугольниках и различных геодезических сетях. Выделяют шесть основных видов условий: условие фигуры, условие горизонта, условия сумм и дирекционных углов и др.</p>
            <p class="card-public__description card-public__description--color">Виды геометрических условий, возникающих в геодезических сетях.</p>
         </a>
      </div>

      <div class="secondary-menu-article">
         <a class="secondary-card secondary-card--max" href="/ehto-kak/nakhozhdenie-centra-okruzhnosti.php" style="background-image: url(/img/article/ehto-kak/nakhozhdenie-centra-okruzhnosti/header-nakhozhdenie-centra-okruzhnosti.svg);">
            <div class="secondary-card__header secondary-card__header--max">Нахождение центра окружности</div>
         </a>
      </div>
   </main>

   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
</body>

</html>