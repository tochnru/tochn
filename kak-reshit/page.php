<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/fonts.css">
   <link rel="shortcut icon" href="/img/global/favicon.png" type="image/png">
   <title>Как решить</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <main class="main-menu-article container">
      <div class="public-menu-article">
         <div class="img-public " style="background-image: url(/img/article/kak-reshit/obratnaya-zasechka-pranis-pranevicha/header-public-obratnaya-zasechka-pranis-pranevicha.svg);"></div>
         <a class="card-public" href="/kak-reshit/obratnaya-zasechka-pranis-pranevicha">
            <div class="card-public__header">
               <img class="card-public__img" src="/img/index/quotes.svg" alt="Геодезическая засечка">
               <p class="card-public__title">Обратная засечка Пранис-Праневича</p>
            </div>
            <p class="card-public__description">Смысл обратной засечки заключается в том, что измерение углов
               (направлений) производится только на определяемом пункте между исходными. Для одного определения
               достаточно трех исходных пунктов. </p>
            <p class="card-public__description card-public__description--color">Данное решение предложено инженером
               И.Ю. Пранис-Праневичем</p>
         </a>
      </div>
      <div class="secondary-menu-article">
         <a class="secondary-card secondary-card--max" href="/kak-reshit/gruppirovka-geodezicheskikh-izmerenij" style="background-image: url(/img/article/kak-reshit/gruppirovka-geodezicheskikh-izmerenij/header-gruppirovka-geodezicheskikh-izmerenij.svg);">
            <div class="secondary-card__header secondary-card__header--max">Группировка геодезических измерений</div>
         </a>
         <a class="secondary-card secondary-card--min" href="/kak-reshit/obratnaya-geodezicheskaya-zadacha" style="background-image: url(/img/article/kak-reshit/obratnaya-geodezicheskaya-zadacha/header-obratnaya-geodezicheskaya-zadacha.svg);">
            <div class="secondary-card__header secondary-card__header--min">Обратная геодезическая задача</div>
         </a>
      </div>
   </main>

   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
</body>

</html>