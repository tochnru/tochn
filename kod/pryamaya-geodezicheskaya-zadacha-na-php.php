<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Прямая геодезическая задача на php. Пишем код для прямой геодезической задачи по средствам языка программирования php. Подробный пример решения прямой геодезической задачи. Программирование геодезия">
   <meta name="Keywords" content="прямая геодезическая задача, php, программирование">
   <!--OpenGraf start-->
   <meta property="og:type" content="website">
   <meta property="og:title" content="Прямая геодезическая задача на PHP | Программирование в геодезии">
   <meta property="og:description"
      content="Прямая геодезическая задача на php. Пишем код для прямой геодезической задачи по средствам языка программирования php. Подробный пример решения прямой геодезической задачи. Программирование геодезия">
   <meta property="og:url" content="https://www.tochn.ru/kod/pryamaya-geodezicheskaya-zadacha-na-php">
   <meta property="og:image"
      content="https://www.tochn.ru/img/article/kod/pryamaya-geodezicheskaya-zadacha-na-php/opengraf-pryamaya-geodezicheskaya-zadacha-na-php.jpg">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <!--OpenGraf end-->
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/base16/oceanicnext.min.css">
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
                  "@id": "https://tochn.ru/kod/page",
                  "name": "Код"
               }
            }
         ],
         "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.tochn.ru/kod/pryamaya-geodezicheskaya-zadacha-na-php"
         },
         "headline": "Прямая геодезическая задача на PHP | Программирование в геодезии",
         "datePublished": "2023-04-23",
         "author": {
            "@type": "Person",
            "name": "Точно"
         },
         "image": [
            "https://www.tochn.ru/img/article/kod/pryamaya-geodezicheskaya-zadacha-na-php/schema-pryamaya-geodezicheskaya-zadacha-na-php.jpg"
         ],
         "description": "Прямая геодезическая задача на php. Пишем код для прямой геодезической задачи по средствам языка программирования php. Подробный пример решения прямой геодезической задачи. Программирование геодезия",
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
   <title>Прямая геодезическая задача на PHP | Программирование в геодезии</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <article class="article-blog">
      <div class="article-header">
         <div class="article-header__description">
            <h1 class="article-header__h1">Прямая геодезическая задача на PHP</h1>
            <p class="article-header__preview">Пишем код прямой геодезической задачи</p>
         </div>
         <div class="article-header__img"
            style="background-image: url(/img/article/kod/pryamaya-geodezicheskaya-zadacha-na-php/header-pryamaya-geodezicheskaya-zadacha-na-php.svg">
         </div>
      </div>
      <!--Хлебные крошки-->
      <ol class="article-breadcrumbs">
         <li class="article-breadcrumbs__item"><time datetime="2023-04-23">23.04.2023 |</time></li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link" href="/kod/page">Код |</a>
         </li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link color-violet"
               href="/kod/pryamaya-geodezicheskaya-zadacha-na-php">Прямая геодезическая задача на PHP</a>
         </li>
      </ol>
      <h2 class="article-blog__h2">Верстка формы прямой геодезической задачи</h2>
      <p class="article-blog__txt">Для реализации данного кода у Вас должны быть базовые знания языков: html, css и
         php.</p>
      <p class="article-blog__txt">Первым что нам понадобится это редактор кода, мы будем использовать Visual Studio
         Code. В редакторе кода создаем папку pgz и помещаем в нее файловую структуру из трех файлов:</p>
      <p class="article-blog__txt mb-0"><span class="article-blog__color-file">index.php</span> – главный файл, в нем
         мы создадим форму для ввода исходных данных.</p>
      <p class="article-blog__txt mb-0"><span class="article-blog__color-file">style.css</span> – файл стилей, в
         данном файле мы сделаем стилизацию нашего приложения.</p>
      <p class="article-blog__txt"><span class="article-blog__color-file">calc.php</span>– файл обработчик, данный
         файл будет обрабатывать наши данные, которые мы ввели в форме и будет выводить результаты расчета
         <strong>прямой геодезической задачи</strong>.
      </p>
      <p class="article-blog__txt">Обратите внимание, что файлы и папки в веб-программировании пишутся со строчной
         буквы, за некоторыми исключениями в объектно-ориентированном программирование.</p>
      <figure class="article-figure">
         <img class="article-figure__img"
            src="/img/article/kod/pryamaya-geodezicheskaya-zadacha-na-php/skhema-fajlov-php.webp"
            alt="Схема файловой структуры прямой геодезической задачи">
         <figcaption class="article-figure__figcaption">Схема файловой структуры</figcaption>
      </figure>
      <p class="article-blog__txt">В файле <span class="article-blog__color-file">index.php</span> создаем базовую
         структуру html разметки, подключаем файл <span class="article-blog__color-file">style.css</span> и
         дополнительно подключаем шрифты Fonts Google. В тело <span
            class="article-blog__color-teg">&lt;body&gt;&lt;/body&gt;</span> вставляем код нашей формы. В теге <span
            class="article-blog__color-teg">&lt;form action="calc.php" method="post"&gt;&lt;/form&gt;</span> в action
         указываем путь до нашего обработчика <span class="article-blog__color-file">calc.php</span>, а метод
         указываем post.</p>
      <div class="accordion-code">
         <details class="accordion-code__details">
            <summary class="accordion-code__summary">Код: html разметка файла index.php</summary>
            <pre class="article-blog__pre">
                  <code class="article-blog__code language-html">
&lt;!DOCTYPE html&gt;
&lt;html lang="ru"&gt;

&lt;head&gt;
   &lt;meta charset="UTF-8"&gt;
   &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
   &lt;!--Подключаем шрифты fonts.google.com--&gt;
   &lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt;
   &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin&gt;
   &lt;link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"&gt;
   &lt;!--Подключеие стилей--&gt;
   &lt;link rel="stylesheet" href="style.css"&gt;
   &lt;title&gt;Прямая геодезическая задача&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
   &lt;div class="container"&gt;
      &lt;div class="wrapper-form"&gt;
         &lt;!--Указываем путь до обработчика calc.php--&gt;
         &lt;form class="form" action="calc.php" method="post"&gt;
            &lt;h1 class="form__h1"&gt;Прямая геодезическая задача&lt;/h1&gt;
               &lt;input class="form__input-data" placeholder="Введите десятичный угол" type="text" name="angle"&gt;
               &lt;input class="form__input-data" placeholder="Введите расстояние" type="text" name="dist"&gt;
               &lt;input class="form__input-data" placeholder="Введите координату X1" type="text" name="x1"&gt;
               &lt;input class="form__input-data" placeholder="Введите координату Y1" type="text" name="y1"&gt;
            &lt;input class="form_btn-calc" type="submit" value="Расчет"&gt;
         &lt;/form&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/body&gt;

&lt;/html&gt;
               </code>
            </pre>
         </details>
      </div>
      <p class="article-blog__txt">Вторым шагом сделаем оформление для нашей формы, добавив стилей в файл <span
            class="article-blog__color-file">style.css</span></p>
      <div class="accordion-code">
         <details class="accordion-code__details">
            <summary class="accordion-code__summary">Код: css стили файла style.css</summary>
            <pre class="article-blog__pre">
                  <code class="article-blog__code language-css">
/*Простой сброс отступов*/
*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}
.container{
   max-width: 1200px;
   margin: 0 auto;
   padding-top: 70px;
   font-family: 'IBM Plex Sans', sans-serif;
}
.wrapper-form{
   padding: 30px;
   background: #F7F7F5;
   border-radius: 10px;
   width: 490px;
}
.form__h1{
   font-size: 22px;
   font-weight: 500;
   margin-bottom: 20px;
}
.form__input-data{
   width: 100%;
   height: 56px;
   margin-bottom: 15px;
   border-radius: 10px;
   border: 1px solid #e3e3e3;
   padding-left: 10px;
   font-size: 18px;
   outline: none;
}
.form__input-data::placeholder{
   font-size: 16px;
}
.form__input-data:focus{
   box-shadow: 0px 0px 9px 0px #BECEFF;
   transition-duration: 0.2s;
}
.form_btn-calc{
   cursor: pointer;
   background: #3f2aff;
   color: white;
   margin-top: 20px;
   width: 100%;
   height: 56px;
   margin-bottom: 15px;
   border-radius: 10px;
   border: 1px solid #e3e3e3;
   padding-left: 10px;
   font-size: 18px;
   outline: none;
}
               </code>
            </pre>
         </details>
      </div>
      <h2 class="article-blog__h2">Пишем обработчик PHP</h2>
      <p class="article-blog__txt">Так как PHP является серверным языком программирования, то для исполнения кода нам
         понадобится веб-сервер. Для разработки как правило используют локальный веб-сервер, самый распространенный и
         удобный это OpenServer. Писать будем в процедурном стиле и без применение пользовательских функций для
         большей простоты и понимания.</p>
      <h2 class="article-blog__h2">Для решения прямой геодезической задачи нам понадобятся исходные данные:</h2>
      <p class="article-blog__txt mb-0">1. Координаты исходного пункта X<sub>1</sub> = 6630270.57 и Y<sub>1</sub> =
         89418.64</p>
      <p class="article-blog__txt mb-0">2. Расстояние S = 4127.89</p>
      <p class="article-blog__txt">3. Дирекционный угол &alpha;<sub>1-2</sub> = 91°47′22″, для удобства переведем его
         в десятичную систему &alpha;<sub>1-2</sub> = 91.7894444</p>
      <p class="article-blog__txt">Наша цель найти координаты (X<sub>2</sub> и Y<sub>2</sub>) второго пункта по
         вышеуказанным исходным данным.</p>
      <p class="article-blog__txt mb-0">1. Объявляем переменные и получаем данные через суперглобальную переменную
         <span class="article-blog__color-variables">$_POST</span>
      </p>
      <p class="article-blog__txt mb-0">2. В языке программирования PHP в функциях <span
            class="article-blog__color-func">sin()</span>, <span class="article-blog__color-func">cos()</span> и др.
         углы задаются в радианах, поэтому объявляем новую переменную и переводим дирекционный угол в радианы
         используя функцию <span class="article-blog__color-func">rad2deg()</span>.</p>
      <p class="article-blog__txt mb-0">4. Четвертым шагов объявим переменные <span
            class="article-blog__color-variables">$dx</span> и <span class="article-blog__color-variables">$dy</span>
         и вычислим приращения координат путем перемножения расстояния на cos для <span
            class="article-blog__color-variables">$dx</span> и на sin для <span
            class="article-blog__color-variables">$dy</span>.</p>
      <p class="article-blog__txt mb-0">5. Заключительным шагом <strong>вычисления прямой геодезической
            задачи</strong> будет вычисление координат искомых пунктов X<sub>2</sub> и Y<sub>2</sub></p>
      <p class="article-blog__txt">6. В PHP есть функция для вывода данных на экран - <span
            class="article-blog__color-func">echo</span>, с ее помощью мы сможем увидеть результат наших вычислений.
      </p>
      <div class="accordion-code">
         <details class="accordion-code__details">
            <summary class="accordion-code__summary">Код: php обработчик файла calc.php</summary>
            <pre class="article-blog__pre">
                  <code class="article-blog__code language-php">
&lt;?php
   //ШАГ 1
   $dir_angle = $_POST["angle"];
   $s = $_POST["dist"];
   $x1 = $_POST["x1"];
   $y1 = $_POST["y1"];
   //ШАГ 2
   $rad_angel = deg2rad($dir_angle);
   //ШАГ 3
   $sin = sin($rad_angel);
   $cos = cos($rad_angel);
   //ШАГ 4
   $dx = $s * $cos;
   $dy = $s * $sin;
   //ШАГ 5
   $x2 = $x1 + $dx;
   $y2 = $y1 + $dy;
   //ШАГ 6
   echo "sin= " . $sin . "&lt;br&gt;";
   echo "cos= " . $cos . "&lt;br&gt;";
   echo "dx= " . $dx . "&lt;br&gt;";
   echo "dy= " . $dy . "&lt;br&gt;";
   echo "x2= " . $x2 . "&lt;br&gt;";
   echo "y2= " . $y2 . "&lt;br&gt;";
?&gt;
               </code>
            </pre>
         </details>
      </div>
      <p class="article-blog__txt">В заключении можно обернуть наш код в функцию и потом ее вызывать, там где это
         потребуется, предварительно подключив файл с этой функцией, тем самым мы реализуем модуль <strong>расчета
            прямой геодезической задачи</strong>.</p>
      <p class="article-blog__txt">Исходный код:</p>
      <a class="article-blog__btn-download" href="https://disk.yandex.ru/d/bAtKhNGhFB5qHg" target="_blank">Скачать</a>
   </article>

   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
   <script>hljs.highlightAll();</script>
</body>

</html>