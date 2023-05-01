<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description"
      content="Группировка геодезических измерений. Методы и способы группировки геодезических измерений для дальнейшего анализа обработки данных. Статистика в геодезии и анализ геодезических данных">
   <meta name="Keywords" content="геодезия, статистика, группировка измерений">
   <!--OpenGraf start-->
   <meta property="og:type" content="website">
   <meta property="og:title" content="Группировка геодезических измерений | Статистика в геодезии">
   <meta property="og:description"
      content="Группировка геодезических измерений. Методы и способы группировки геодезических измерений для дальнейшего анализа обработки данных. Статистика в геодезии и анализ геодезических данных">
   <meta property="og:url" content="https://www.tochn.ru/kak-reshit/gruppirovka-geodezicheskikh-izmerenij">
   <meta property="og:image"
      content="https://www.tochn.ru/img/article/kak-reshit/gruppirovka-geodezicheskikh-izmerenij/opengraf-gruppirovka-geodezicheskikh-izmerenij.jpg">
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
            "@id": "https://www.tochn.ru/kak-reshit/gruppirovka-geodezicheskikh-izmerenij"
         },
         "headline": "Группировка геодезических измерений | Статистика в геодезии",
         "datePublished": "2023-05-01",
         "author": {
            "@type": "Person",
            "name": "Точно"
         },
         "image": [
            "https://www.tochn.ru/img/article/kak-reshit/gruppirovka-geodezicheskikh-izmerenij/schema-gruppirovka-geodezicheskikh-izmerenij.jpg"
         ],
         "description": "Группировка геодезических измерений. Методы и способы группировки геодезических измерений для дальнейшего анализа обработки данных. Статистика в геодезии и анализ геодезических данных",
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
   <title>Группировка геодезических измерений | Статистика в геодезии</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <article class="article-blog">
      <div class="article-header">
         <div class="article-header__description">
            <h1 class="article-header__h1">Группировка геодезических измерений </h1>
            <p class="article-header__preview">Группировка геодезических данных для дальнейшего анализа</p>
         </div>
         <div class="article-header__img"
            style="background-image: url(/img/article/kak-reshit/gruppirovka-geodezicheskikh-izmerenij/header-gruppirovka-geodezicheskikh-izmerenij.svg)">
         </div>
      </div>
      <!--Хлебные крошки-->
      <ol class="article-breadcrumbs">
         <li class="article-breadcrumbs__item"><time datetime="2023-05-01">01.05.2023 |</time></li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link" href="/kak-reshit/page">Как решить |</a>
         </li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link color-violet"
               href="/kak-reshit/gruppirovka-geodezicheskikh-izmerenij">Группировка геодезических измерений</a>
         </li>
      </ol>
      <p class="article-blog__txt">Помимо сбора данных результатов <strong>геодезических измерений</strong> их нужно
         <strong>сгруппировать</strong> для дальнейшего анализа. Делается это для того, чтобы изучить совокупность в
         целом, выявить характерные группы и закономерности в геодезических измерениях.
      </p>
      <p class="article-blog__txt">$$ \{X_i\} - набор \;данных;$$</p>
      <p class="article-blog__txt">У набора данных есть максимальное (X<sub>max</sub>), минимальное(X<sub>min</sub>)
         значение, а также в этой выборке (X<sub>i</sub>) есть кол-во N, которое и нужно сгруппировать на некоторое
         кол-во интервалов. В качестве наглядного примера (таблица 1) возьмем случайные значения расстояний
         (X<sub>i</sub>)</p>
      <p class="article-blog__txt ta-right">Таблица 1</p>
      <table class="article-table">
         <tr class="article-table__str">
            <td class="tb1-1-ggi fw-700">N</td>
            <td class="tb1-1-ggi">1</td>
            <td class="tb1-1-ggi">2</td>
            <td class="tb1-1-ggi">3</td>
            <td class="tb1-1-ggi">4</td>
            <td class="tb1-1-ggi">5</td>
            <td class="tb1-1-ggi">6</td>
            <td class="tb1-1-ggi">7</td>
            <td class="tb1-1-ggi">8</td>
            <td class="tb1-1-ggi">9</td>
            <td class="tb1-1-ggi">10</td>
            <td class="tb1-1-ggi">11</td>
            <td class="tb1-1-ggi">12</td>
            <td class="tb1-1-ggi">13</td>
            <td class="tb1-1-ggi">14</td>
            <td class="tb1-1-ggi">15</td>
            <td class="tb1-1-ggi">16</td>
            <td class="tb1-1-ggi">17</td>
            <td class="tb1-1-ggi">18</td>
            <td class="tb1-1-ggi">19</td>
            <td class="tb1-1-ggi">20</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ggi fw-700">X<sub>i</sub></td>
            <td class="tb1-1-ggi">4</td>
            <td class="tb1-1-ggi">7</td>
            <td class="tb1-1-ggi">10</td>
            <td class="tb1-1-ggi">12</td>
            <td class="tb1-1-ggi">13</td>
            <td class="tb1-1-ggi">14</td>
            <td class="tb1-1-ggi">16</td>
            <td class="tb1-1-ggi">17</td>
            <td class="tb1-1-ggi">18</td>
            <td class="tb1-1-ggi">18</td>
            <td class="tb1-1-ggi">23</td>
            <td class="tb1-1-ggi">24</td>
            <td class="tb1-1-ggi">25</td>
            <td class="tb1-1-ggi">31</td>
            <td class="tb1-1-ggi">35</td>
            <td class="tb1-1-ggi">40</td>
            <td class="tb1-1-ggi">44</td>
            <td class="tb1-1-ggi">46</td>
            <td class="tb1-1-ggi">50</td>
            <td class="tb1-1-ggi">51</td>
         </tr>
      </table>
      <p class="article-blog__txt">В нашей выборке найдем минимальное и максимальное значение X<sub>i</sub></p>
      <p class="article-blog__txt">X<sub>min</sub> = 4, X<sub>max</sub> = 51</p>
      <p class="article-blog__txt">Всего данных у нас N = 20</p>
      <p class="article-blog__txt">Возникает вопрос: на сколько интервалов нам разбивать наши данные? Для этого есть
         Правило Стерджеса – которое позволяет нам определить оптимальное количество интервалов, на которые
         разбивается наш диапазон расстояний:</p>
      <p class="article-blog__txt">$$K=1+log_2N$$</p>
      <p class="article-blog__txt">$$K=1+log_220=5.3$$</p>
      <p class="article-blog__txt">Число K должно быть целым числом, поэтому округляем его до пяти. Теперь нам
         известно сколько у нас будет интервалов, но не известен их шаг. Шаг интервала вычисляется по формуле:</p>
      <p class="article-blog__txt">$$h= {x_{max}-x_{min} \over K}$$</p>
      <p class="article-blog__txt">$$h= {51-4 \over 5}=9.4$$</p>
      <p class="article-blog__txt">Так как числа у нас целые и разброс у них большой, то для удобства округлим h до
         целого числа, т.е. до девяти.</p>
      <p class="article-blog__txt">Все данные для построения интервалов у нас есть и теперь мы можем
         <strong>сгруппировать</strong> их. Минимальное значение у нас равно 4, а шаг равен 9, т.е. интервалы будут
         строиться в следующем порядке: 4 + 9 = 13, 13 + 9 = 22 и т.д (таблица 2 столбец 1).
      </p>
      <p class="article-blog__txt article-blog__txt--warning">Важно: Из-за округлений и неравномерностей, числа К
         может не хватить для покрытия максимального значения (X<sub>max</sub>). В нашем примере согласно числу K
         должно быть пять интервалов, которых недостаточно чтоб покрыть значения 50,51, т.к. пятый интервал
         заканчивается на 49. В данном случае просто продолжаем строить интервалы, пока максимальное значение не
         попадет в последнюю ячейку.</p>
      <p class="article-blog__txt">Определяем количество значений, которые попали в наши интервалы, fi частота
         попадания в тот или иной интервал (таблица 2 столбец 2)</p>
      <p class="article-blog__txt">С этим распределением в дальнейшем можно производить различные операции, в том
         числе и строить графики. Для начала определим середину каждого интервала(x<sub>i</sub> варианта, таблица 2
         столбец 3). Варианта необходима для проведения расчетов различного рода. Например, у вас есть уже
         сгруппированная таблица с интервалами (без исходного набора данных) и вам нужно посчитать среднее значение,
         варианта как раз позволяет это сделать. Конечно, среднее значение будет отличаться от истинного среднего,
         которое посчитано по исходному набору данных. Давайте посчитаем средние значения в двух случаях и сравним
         их.</p>
      <p class="article-blog__txt">Расчет среднего значения для <strong>сгруппированных геодезических
            измерений</strong>, будет производиться по формуле:</p>
      <p class="article-blog__txt">$$\hat x = {\sum_{i=1}^K(\hat x_i * f_i) \over N}$$</p>
      <p class="article-blog__txt">$$\hat x = {503 \over 20}=25.2$$</p>
      <p class="article-blog__txt">Произведение варианты на частоту вынесем в отдельный столбец (таблица 2 столбец 4)
      </p>
      <p class="article-blog__txt">Истинное среднее арифметическое считается по формуле:</p>
      <p class="article-blog__txt">$$\bar x = {\sum_{i=1}^NX_i \over N}= {498\over 20}=24.9$$</p>
      <p class="article-blog__txt ta-right">Таблица 2</p>

      <table class="article-table">
         <tr class="article-table__str article-table__str--header">
            <th class="tb2-1-ggi fw-600">Интервалы</th>
            <th class="tb2-2-ggi fw-600">f<sub>i</sub>(частота)</th>
            <th class="tb2-3-ggi fw-600">X<sub>i</sub>(варианта)</th>
            <th class="tb2-4-ggi fw-600">(x<sub>i</sub>*f<sub>i</sub>)</th>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb2-1-ggi">1</td>
            <td class="tb2-2-ggi">2</td>
            <td class="tb2-3-ggi">3</td>
            <td class="tb2-4-ggi">4</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb2-1-ggi">4-13</td>
            <td class="tb2-2-ggi">5</td>
            <td class="tb2-3-ggi">8.5</td>
            <td class="tb2-4-ggi">42.5</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb2-1-ggi">13-22</td>
            <td class="tb2-2-ggi">5</td>
            <td class="tb2-3-ggi">17.5</td>
            <td class="tb2-4-ggi">87.5</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb2-1-ggi">22-31</td>
            <td class="tb2-2-ggi">4</td>
            <td class="tb2-3-ggi">26.5</td>
            <td class="tb2-4-ggi">106</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb2-1-ggi">31-40</td>
            <td class="tb2-2-ggi">2</td>
            <td class="tb2-3-ggi">35.5</td>
            <td class="tb2-4-ggi">71</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb2-1-ggi">40-49</td>
            <td class="tb2-2-ggi">2</td>
            <td class="tb2-3-ggi">44.5</td>
            <td class="tb2-4-ggi">89</td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb2-1-ggi">49-58</td>
            <td class="tb2-2-ggi">2</td>
            <td class="tb2-3-ggi">53.5</td>
            <td class="tb2-4-ggi">107</td>
         </tr>
      </table>
      <p class="article-blog__txt">Как мы видим на этапе вычислений возникла случайная арифметическая ошибка, т.к.
            среднее значение сгруппированных данных отличается от истинного среднего арифметического. Получается такая
            ошибка из-за неравномерности распределения внутри ячеек(интервалов). На простом примере мы <strong>сгруппировали
            геодезические измерения</strong> в интервалы и рассчитали среднее значение интервала. При большом объеме данных,
            например у на есть 1000 и более измерений, очень сложно определить на какие интервалы группировать данные,
            формула Стерджеса позволяет сгруппировать набор геодезических измерений в ячейки(интервалы).
         </p>







   </article>

   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>

</html>