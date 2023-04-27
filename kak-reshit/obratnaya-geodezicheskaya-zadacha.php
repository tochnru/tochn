<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Полное руководство по решению обратной геодезической задачи применяемой в геодезии, маркшейдерском деле и других отраслях. Обратная геодезическая задача производит расчет расстояния и нахождение геодезического дирекционного угла">
   <meta name="Keywords" content="обратная задача, решение, геодезия, геодезической">
   <!--OpenGraf start-->
   <meta property="og:type" content="website">
   <meta property="og:title" content="Обратная геодезическая задача | Решение геодезической задачи">
   <meta property="og:description"
      content="Полное руководство по решению обратной геодезической задачи применяемой в геодезии, маркшейдерском деле и других отраслях. Обратная геодезическая задача производит расчет расстояния и нахождение геодезического дирекционного угла">
   <meta property="og:url" content="https://www.tochn.ru/kak-reshit/obratnaya-geodezicheskaya-zadacha">
   <meta property="og:image"
      content="https://www.tochn.ru/img/article/kak-reshit/obratnaya-geodezicheskaya-zadacha/opengraf-obratnaya-geodezicheskaya-zadacha.jpg">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <!--OpenGraf end-->
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/fonts.css">
   <link rel="shortcut icon" href="/img/global/favicon.png" type="image/png">
   <script type="application/ld+json">
      {
         "@context": "http://schema.org",
         "@type": [
            "Article",
            "BreadcrumbList"
         ],
         "itemListElement": [
            {
               "@type": "ListItem",
               "position": 1,
               "item": {
                  "@id": "https://tochn.ru/",
                  "name": "Точно"
               }
            },
            {
               "@type": "ListItem",
               "position": 2,
               "item": {
                  "@id": "https://tochn.ru/kak-reshit/page",
                  "name": "Как решить"
               }
            }
         ],
         "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.tochn.ru/kak-reshit/obratnaya-geodezicheskaya-zadacha"
         },
         "headline": "Обратная геодезическая задача | Решение геодезической задачи",
         "datePublished": "2023-04-27",
         "author": {
            "@type": "Person",
            "name": "Точно"
         },
         "image": [
            "https://www.tochn.ru/img/article/kak-reshit/obratnaya-geodezicheskaya-zadacha/schema-obratnaya-geodezicheskaya-zadacha.jpg"
         ],
         "description": "Полное руководство по решению обратной геодезической задачи применяемой в геодезии, маркшейдерском деле и других отраслях. Обратная геодезическая задача производит расчет расстояния и нахождение геодезического дирекционного угла",
         "publisher": {
            "@type": "Organization",
            "name": "tochn.ru",
            "logo": {
               "@type": "ImageObject",
               "url": "https://www.tochn.ru/img/razmetka/logo-120x120.png"
            }
         }
      }
   </script>
   <title>Обратная геодезическая задача | Решение геодезической задачи</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <article class="article-blog">
      <div class="article-header">
         <div class="article-header__description">
            <h1 class="article-header__h1">Обратная геодезическая задача</h1>
            <p class="article-header__preview">В рубрике Как решить давайте рассмотрим полное руководство по решению
               обратной геодезической задачи</p>
         </div>
         <div class="article-header__img"
            style="background-image: url(/img/article/kak-reshit/obratnaya-geodezicheskaya-zadacha/header-obratnaya-geodezicheskaya-zadacha.svg)">
         </div>
      </div>
      <!--Хлебные крошки-->
      <ol class="article-breadcrumbs">
         <li class="article-breadcrumbs__item"><time datetime="2023-04-27">27.04.2023 |</time></li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link" href="/kak-reshit/page">Как решить |</a>
         </li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link color-violet"
               href="/kak-reshit/obratnaya-geodezicheskaya-zadacha">Обратная геодезическая задача </a>
         </li>
      </ol>
      <p class="article-blog__txt">Сущность решения <strong>обратной геодезической задачи</strong> заключается в
         <strong>вычислении</strong> дирекционного угла направления и расстояния между двумя пунктами, у которых
         известны координаты. Вычисления удобнее производить в электронных таблицах, а в основу расчета задачи лежат
         таблицы натуральных значений тригонометрических функций или таблицы логарифмов чисел и тригонометрических
         функций. В нашем примере мы будем вычислять расстояние между двумя пунктами Миус – Николаевка, схема которых
         представлена на рисунке, а порядок расчета задачи представлен в таблице.
      </p>
      <h2 class="article-blog__h2">Расчет обратной геодезической задачи</h2>
      <p class="article-blog__txt"><span class="color-violet">1.</span> Выпишем координаты известных пунктов. Первым
         пунктом у нас идет Миус, обозначим его как: X<sub>1</sub> = 1739.62, Y<sub>1</sub> = 2983.82; второй пункт
         Николаевка, обозначим как: X<sub>2</sub> = 1201.51, Y<sub>2</sub> = 1036.53</p>
      <p class="article-blog__txt"><span class="color-violet">2.</span> Вычисляем приращение координат по оси X путем
         разностей двух координат ΔX = X<sub>2</sub> – X<sub>1</sub> = 1201.51 – 1739.62 = –538.11</p>
      <p class="article-blog__txt"><span class="color-violet">3.</span> Производим <strong>расчет</strong> приращения
         координат по оси Y путем разностей двух координат ΔY = Y<sub>2</sub> – Y<sub>1</sub> = 1036.53 – 2983.82=
         –1947.29</p>
      <p class="article-blog__txt"><span class="color-violet">4.</span> Вычисляем румб путем нахождения арктангенса из
         отношения ΔX к ΔY по модулю r = arctgα|ΔY/ΔX| = arctgα|–1947.29/–538.11| = 74.5525074625376 = 74°33′9″ЮЗ. Румб
         получился в юго-западном направлении.</p>
      <p class="article-blog__txt"><span class="color-violet">5.</span> Необходимо найти дирекционный угол стороны, для
         нахождения удобнее всего воспользоваться таблицей, указанной ниже. Дирекционный угол определяется по знакам
         приращения координат ΔX и ΔY. Для нашего примера знаки приращения координат равны –ΔX и –ΔY, значит расчет
         будет производиться по формуле α=180°+r= 180°+74°33′09″=254°33′09″</p>
      <p class="article-blog__txt"><span class="color-violet">6.</span> Вычисляем расстояние путем деления ΔX на косинус
         дирекционного угла S = ΔX / cosα<sub>1-2</sub> = –538.11 / –0.26635529 = 2020.27</p>
      <p class="article-blog__txt"><span class="color-violet">7.</span> Вычисляем расстояние путем деления ΔY на синус
         дирекционного угла S = ΔY / sinα<sub>1-2</sub> = –1947.29 / –0.96387491 = 2020.27</p>
      <p class="article-blog__txt"><span class="color-violet">8.</span> Если расстояния в пунктах 6 и 7 получились
         равны, значит результаты расчета <strong>обратной геодезической задачи</strong> верны.</p>
      <figure class="article-figure">
         <img class="article-figure__img" src="/img/article/kak-reshit/obratnaya-geodezicheskaya-zadacha/sheme-ogz.webp"
            alt="Схема обратной геодезической задачи">
         <figcaption class="article-figure__figcaption">Схема обратной геодезической задачи</figcaption>
      </figure>
      <table class="article-table">
         <tr class="article-table__str article-table__str--header">
            <th class="tb1-1-ogz fw-600">ΔX</th>
            <th class="tb1-2-ogz fw-600">ΔY</th>
            <th class="tb1-3-ogz fw-600">Номер четверти</th>
            <th class="tb1-4-ogz fw-600">Формула расчета дир.угла</th>
            <th class="tb1-5-ogz fw-600">Направление румба</th>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ogz">+</td>
            <td class="tb1-2-ogz">+</td>
            <td class="tb1-3-ogz">I</td>
            <td class="tb1-4-ogz">α=r</td>
            <td class="tb1-5-ogz">СВ</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ogz">-</td>
            <td class="tb1-2-ogz">+</td>
            <td class="tb1-3-ogz">II</td>
            <td class="tb1-4-ogz">α = 180° – r</td>
            <td class="tb1-5-ogz">ЮВ</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ogz">-</td>
            <td class="tb1-2-ogz">-</td>
            <td class="tb1-3-ogz">III</td>
            <td class="tb1-4-ogz">α = 180° + r</td>
            <td class="tb1-5-ogz">ЮЗ</td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb1-1-ogz">+</td>
            <td class="tb1-2-ogz">-</td>
            <td class="tb1-3-ogz">IV</td>
            <td class="tb1-4-ogz">α = 360° – r</td>
            <td class="tb1-5-ogz">СЗ</td>
         </tr>
      </table>
      <p class="article-blog__txt"><span class="color-violet">9.</span> Так как &Delta;X и &Delta;Y являются катетами
         треугольника, то дополнительным контролем правильности расчета <strong>обратной геодезической задачи</strong>
         будет теорема Пифагора.</p>
      <p class="article-blog__txt">$$S = \sqrt{&Delta;X^2+&Delta;Y^2}=$$</p>
      <p class="article-blog__txt">$$= \sqrt{-538.11^2+(-1947.29)^2}=$$</p>
      <p class="article-blog__txt">$$=2020.27$$</p>
   </article>

   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>

</html>