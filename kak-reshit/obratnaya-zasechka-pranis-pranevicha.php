<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Целью обратной геодезической засечки по формулам Пранис-Праневича является определение координат пункта, на котором производится измерение углов. Данное руководство поможет вам решить обратную засечку">
   <meta name="Keywords" content="обратная засечка, Пранис Праневич, решение геодезической засечки">
   <!--OpenGraf start-->
   <meta property="og:type" content="website">
   <meta property="og:title" content="Обратная засечка Пранис-Праневича">
   <meta property="og:description"
      content="Целью обратной геодезической засечки по формулам Пранис-Праневича является определение координат пункта, на котором производится измерение углов. Данное руководство поможет вам решить обратную засечку">
   <meta property="og:url" content="https://www.tochn.ru/kak-reshit/obratnaya-zasechka-pranis-pranevicha">
   <meta property="og:image"
      content="https://www.tochn.ru/img/article/kak-reshit/obratnaya-zasechka-pranis-pranevicha/opengraf-obratnaya-zasechka-pranis-pranevicha.jpg">
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
            "@id": "https://www.tochn.ru/kak-reshit/obratnaya-zasechka-pranis-pranevicha"
         },
         "headline": "Обратная засечка Пранис-Праневича",
         "datePublished": "2023-04-15",
         "author": {
            "@type": "Person",
            "name": "Точно"
         },
         "image": [
            "https://www.tochn.ru/img/article/kak-reshit/obratnaya-zasechka-pranis-pranevicha/schema-obratnaya-zasechka-pranis-pranevicha.jpg"
         ],
         "description": "Целью обратной геодезической засечки по формулам Пранис-Праневича является определение координат пункта, на котором производится измерение углов. Данное руководство поможет вам решить обратную засечку",
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
   <title>Обратная засечка Пранис-Праневича</title>
</head>

<body>
   <?php
      require_once "../include/metrika-yandex.php";
      require_once "../include/header.php";
   ?>

   <article class="article-blog">
      <div class="article-header">
         <div class="article-header__description">
            <h1 class="article-header__h1">Обратная засечка Пранис-Праневича</h1>
            <p class="article-header__preview">Руководство по решению обратной засечки по формулам Пранис-Праневича</p>
         </div>
         <div class="article-header__img"
            style="background-image: url(/img/article/kak-reshit/obratnaya-zasechka-pranis-pranevicha/header-public-obratnaya-zasechka-pranis-pranevicha.svg)">
         </div>
      </div>
      <!--Хлебные крошки-->
      <ol class="article-breadcrumbs">
         <li class="article-breadcrumbs__item"><time datetime="2023-04-15">15.04.2023 |</time></li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link" href="/kak-reshit/page">Как решить |</a>
         </li>
         <li class="article-breadcrumbs__item">
            <a class="article-breadcrumbs__link color-violet"
               href="/kak-reshit/obratnaya-zasechka-pranis-pranevicha">Обратная засечка Пранис-Праневича</a>
         </li>
      </ol>
      <p class="article-blog__txt">Смысл <strong>обратной засечки</strong> заключается в том, что измерение углов
         (направлений) производится только на определяемом пункте между исходными. Для одного определения достаточно
         трех исходных пунктов. Однако в этом случае координаты определяемого пункта получаются без контроля,
         следовательно,возникает необходимость в определении точки по четырем исходным пунктам. Вычисление координат
         пункта, определенного обратной засечкой по формулам, предложенным инженером И.Ю.
         Пранис-Праневичем, производится в следующем порядке:</p>
      <h2 class="article-blog__h2">Расчет обратной засечки</h2>
      <p class="article-blog__txt"><span class="color-violet">1.</span> Составляют схематический чертеж определения
         пункта, полученного обратной засечкой, по углам.</p>
      <p class="article-blog__txt"><span class="color-violet">2.</span> Выбирают два наилучших варианта измеренных
         направлений. (рисунок 1)</p>
      <figure class="article-figure">
         <img class="article-figure__img"
            src="/img/article/kak-reshit/obratnaya-zasechka-pranis-pranevicha/sheme-ozpfpp.webp"
            alt="Схема обратной засечки">
         <figcaption class="article-figure__figcaption">Схема обратной засечки</figcaption>
      </figure>
      <p class="article-blog__txt"><span class="color-violet">3.</span> Составляют формуляр вычислений координат
         (таблица 1), где в графе 1 проставляют номера исходных пунктов каждого варианта в отдельности. Нумерацию
         производят против хода часовой стрелки с таким расчетом, чтобы в вычислениях участвовали углы в пределах от
         20 до 160 градусов.</p>
      <p class="article-blog__txt mb-0">Углом β<sub>1</sub> обозначают угол между пунктами 1 и 2.</p>
      <p class="article-blog__txt">Углом β<sub>2</sub> обозначают угол между пунктами 2 и 3 (рисунок 1).</p>
      <p class="article-blog__txt"><span class="color-violet">4.</span> В графу 2 выписывают названия пунктов по
         порядку, соответственно их нумерации в каждом варианте.</p>
      <p class="article-blog__txt"><span class="color-violet">5.</span> В графах 3 и 5 записывают координаты исходных
         пунктов. Кроме того, в графах 6 и 7 записывают координаты пункта под номером 2, от которого через приращения
         будут в конце вычислений переданы координаты на определяемый пункт.</p>
      <p class="article-blog__txt"><span class="color-violet">6.</span> В графу 4 записывают измеренные углы
         β<sub>1</sub> и β<sub>2</sub></p>
      <p class="article-blog__txt"><span class="color-violet">7.</span> Далее переходят к вычислению приращений
         координат:</p>
      <p class="article-blog__txt">$$(x_2-x_1),(y_2-y_1)$$</p>
      <p class="article-blog__txt">$$(x_3-x_2),(y_3-y_2)$$</p>
      <p class="article-blog__txt">$$(x_1-x_3),(y_1-y_3)$$</p>
      <p class="article-blog__txt mb-0">Запись необходимо вести строго по порядку, указанному в приводимом примере.
      </p>
      <p class="article-blog__txt">Контроль вычислений приращений координат производят по формулам:</p>
      <p class="article-blog__txt">$$(x_2-x_1)+(x_3-x_2)+(x_1-x_3)=0$$</p>
      <p class="article-blog__txt">$$(y_2-y_1)+(y_3-y_2)+(y_1-y_3)=0$$</p>
      <p class="article-blog__txt"><span class="color-violet">8.</span> В графе 4, ниже измеренных углов
         β<sub>1</sub> и β<sub>2</sub> записывают их котангенсы. Необходимо помнить, что ctgβ<sub>1</sub> записывают
         в одной строке с величинами (x<sub>2</sub> – x<sub>1</sub>) и (y<sub>2</sub> – y<sub>1</sub>),
         ctgβ<sub>2</sub> с величинами (x<sub>3</sub> – x<sub>2</sub>) и (y<sub>3</sub> – y<sub>2</sub>). Знаки
         котангенсов проставляются по следующему правилу: котангенсы углов от 0 до 90 градусов имеют знак плюс (+),
         углов от 90 до 180 – знак минус (-).</p>
      <p class="article-blog__txt"><span class="color-violet">9.</span> Вычисляют величины A и B по формулам:</p>
      <p class="article-blog__txt">$$A=(y_2-y_1)*ctgβ_1-$$</p>
      <p class="article-blog__txt">$$-(y_3-y_2)*ctgβ_2+(x_1-x_3);$$</p>
      <p class="article-blog__txt">$$B=(x_2-x_1)*ctgβ_1-$$</p>
      <p class="article-blog__txt">$$-(x_3-x_2)*ctgβ_2-(y_1-y_3).$$</p>
      <p class="article-blog__txt">Вычисления величин A и B производятся без записи промежуточных величин, так как
         все данные записаны рядом. В прилагаемом примере:</p>
      <p class="article-blog__txt mb-0">A = -3696.45 * 0.190032 - (-3371.66) * (-0.181831) + 1199.09 = -116.43</p>
      <p class="article-blog__txt">B = 3447.98 * 0.190032 - (-4647.07) * (-0.181831) - 7068.11 = -7257.87</p>
      <p class="article-blog__txt">Вычисленные величины A и B записываются внизу: величину A – в графу 5, величину B
         – в графу 3.</p>
      <p class="article-blog__txt"><span class="color-violet">10.</span> Далее вычисляют величину ctg θ = A/B.
         Полученный результат записывают в графу 4 между величинами A и B. Знак ctgθ зависит от знаков A и B. В
         случае, если A и B имеют разные знаки, ctgθ будет иметь знак минус, при одинаковых знаках A и B ctgθ будет
         иметь знак плюс:</p>
      <p class="article-blog__txt">$${+A\over -B}=-ctgθ\;и\;{-A\over +B}=-ctgθ,$$</p>
      <p class="article-blog__txt">$${+A\over +B}=+ctgθ\;и\;{-A\over -B}=+ctgθ.$$</p>
      <p class="article-blog__txt"><span class="color-violet">11.</span> Затем вычисляют величину (1 +
         ctg<sup>2</sup>θ) и записывают в графу 7 на одной строке с ctgθ. Следует помнить, что после возведения ctgθ
         в квадрат, последний будет иметь всегда знак плюс.</p>
      <p class="article-blog__txt"><span class="color-violet">12.</span> Далее вычисляют величины:</p>
      <p class="article-blog__txt">$$(1+ctgβ_1*ctgθ)\;и\;(1-ctgβ_2*ctgθ)$$</p>
      <p class="article-blog__txt">И записывают в графу 2 одно под другим:</p>
      <p class="article-blog__txt mb-0">(1 + ctgβ<sub>1</sub> * ctgθ) на одной строке рядом с (x<sub>2</sub> -
         x<sub>1</sub>)</p>
      <p class="article-blog__txt">(1 - ctgβ<sub>2</sub> * ctgθ) на одной строке рядом с (x<sub>3</sub> -
         x<sub>2</sub>)</p>
      <p class="article-blog__txt">Практически это делается в таком порядке(приводятся данные из первого варианта
         расчета обратной засечки из прилагаемого примера):</p>
      <p class="article-blog__txt mb-0">ctgθ = +0.016041;</p>
      <p class="article-blog__txt mb-0">ctg<sup>2</sup>θ = +0.000257;</p>
      <p class="article-blog__txt">1 + ctg<sup>2</sup>θ = 1 + 0.000257 = +1.000257;</p>
      <p class="article-blog__txt mb-0">Затем ctgθ умножают на ctgβ<sub>1</sub>:</p>
      <p class="article-blog__txt mb-0">ctgθ * ctgβ<sub>1</sub> = 0.016041 * 0.190032 = +0.003048</p>
      <p class="article-blog__txt">(1 + ctgθ * ctgβ<sub>1</sub>) = +1.003048</p>
      <p class="article-blog__txt mb-0">Затем ctgθ умножают на ctgβ<sub>2</sub>:</p>
      <p class="article-blog__txt mb-0">ctgθ * ctgβ<sub>2</sub> = 0.016041 * (-0.181831) = -0.002917</p>
      <p class="article-blog__txt">(1 - ctgθ * ctgβ<sub>2</sub>) = 1 - (-0.002917) = +1.002917</p>
      <p class="article-blog__txt"><span class="color-violet">13.</span> Далее вычисляют величины:</p>
      <p class="article-blog__txt mb-0">(ctgβ<sub>1</sub> - ctgθ) = 0.190032 - 0.016041 = +0.173991</p>
      <p class="article-blog__txt">(ctgβ<sub>2</sub> + ctgθ) = -0.181831 + 0.016041 = -0.165790</p>
      <p class="article-blog__txt mb-0">Полученные величины записывают в графу 6:</p>
      <p class="article-blog__txt mb-0">(ctgβ<sub>1</sub> - ctgθ) на одной строке рядом с (y<sub>2</sub> -
         y<sub>1</sub>)</p>
      <p class="article-blog__txt">(ctgβ<sub>2</sub> + ctgθ) на одной строке рядом с (y<sub>3</sub> - y<sub>2</sub>)
      </p>
      <p class="article-blog__txt"><span class="color-violet">14.</span> Затем приступают к вычислению величины N:
      </p>
      <p class="article-blog__txt">$$N=(y_2-y_1)*(ctgβ_1-ctgθ)-$$</p>
      <p class="article-blog__txt">$$-(x_2-x_1)*(1+ctgβ_1*ctgθ)$$</p>
      <p class="article-blog__txt">$$=(y_3-y_2)*(ctgβ_2+ctgθ)+$$</p>
      <p class="article-blog__txt">$$+(x_3-x_2)*(1-ctgβ_2*ctgθ)$$</p>
      <p class="article-blog__txt">Эту величину для контроля получают дважды. Например:</p>
      <p class="article-blog__txt mb-0">N<sub>1</sub> = -3696.45 * 0.173991 - 3447.98 * 1.003048 = -4101.64</p>
      <p class="article-blog__txt">N<sub>2</sub> = -3371.66 * (-0.165790) + (-4647.07) * 1.002917 = -4101.64</p>
      <p class="article-blog__txt">Если в промежуточных вычислениях обратной засечки ошибок нет, то полученные два
         значения N могут расходиться:</p>
      <p class="article-blog__txt mb-0">Если ctgθ лежит в диапазоне от 0 до 10 - на 1-5см</p>
      <p class="article-blog__txt mb-0">Если ctgθ лежит в диапазоне от 10 до 100 - до 50см</p>
      <p class="article-blog__txt">Если ctgθ больше 100 - порядка 1м.</p>
      <p class="article-blog__txt">Величины N1 и N2 записывают в графу 7 над величиной (1 + ctg<sup>2</sup>θ)</p>
      <p class="article-blog__txt"><span class="color-violet">15.</span> Затем приступают к последнему этапу –
         вычислению координат искомой точки. Для этого из двух значений величины N получают среднее, делят его на
         вычисленную ранее величину (1 + ctg<sup>2</sup>θ) и записывают в графу 6 под значением абсциссы исходного
         пункта под номером 2. Затем полученный результат умножают на ctgθ и результат записывают в графу 7 под
         значением ординаты исходного пункта под номером 2. Величина N/(1 + ctg<sup>2</sup>θ) есть приращение по
         линии абцисс – Δx<sub>p</sub>, величина Δx<sub>p</sub> * ctgθ -приращение по линии ординат Δy<sub>p</sub>.</p>
      <p class="article-blog__txt">$$Δx_p= {N \over 1+ctg^2θ}$$</p>
      <p class="article-blog__txt">$$Δy_p= Δx_p*ctgθ$$</p>
      <p class="article-blog__txt">Следовательно, координаты искомой точки будут равны:</p>
      <p class="article-blog__txt">$$x_p=x_2+Δx_p$$</p>
      <p class="article-blog__txt">$$y_p=y_2+Δy_p$$</p>
      <p class="article-blog__txt">При этом знак Δx<sub>p</sub> одинаков со знаком величины N, а Δy<sub>p</sub> будет
         иметь знак в зависимости от знаков Δx<sub>p</sub> и ctgθ.</p>
      <h3 class="article-blog__h3">Измеренные направления обратной засечки</h3>
      <table class="article-table">
         <tr class="article-table__str article-table__str--header">
            <th class="tb0-1-ozpp fw-600">Названия направлений</th>
            <th class="tb0-2-ozpp fw-600">Класс</th>
            <th class="tb0-3-ozpp fw-600">Измеренные направления</th>
         </tr>
         <tr class="article-table__str">
            <td class="tb0-1-ozpp">Тур, пир.</td>
            <td class="tb0-2-ozpp">2</td>
            <td class="tb0-3-ozpp">0°0′0″</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb0-1-ozpp">Миус, пир.</td>
            <td class="tb0-2-ozpp">4</td>
            <td class="tb0-3-ozpp">100°18′20″</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb0-1-ozpp">Загон, пир.</td>
            <td class="tb0-2-ozpp">4</td>
            <td class="tb0-3-ozpp">179°32′45″</td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb0-1-ozpp">Веселый, пир.</td>
            <td class="tb0-2-ozpp">4</td>
            <td class="tb0-3-ozpp">230°35′00″</td>
         </tr>
      </table>
      <h3 class="article-blog__h3 mb-0">Решение обратной засечки</h3>
      <p class="article-blog__txt ta-right">Таблица 1</p>
      <table class="article-table">
         <tr class="article-table__str article-table__str--header">
            <th class="tb1-1-ozpp fw-600">Номера пунктов</th>
            <th class="tb1-2-ozpp fw-600">Названия пунктов</th>
            <th class="tb1-3-ozpp fw-600">x<sub>1</sub>, x<sub>2</sub>, x<sub>3</sub></th>
            <th class="tb1-4-ozpp fw-600">β<sub>1</sub>, β<sub>2</sub></th>
            <th class="tb1-5-ozpp fw-600">y<sub>1</sub>, y<sub>2</sub>, y<sub>3</sub></th>
            <th class="tb1-6-ozpp fw-600">x<sub>2</sub>, Δx<sub>p</sub>, x<sub>p</sub></th>
            <th class="tb1-7-ozpp fw-600">y<sub>2</sub>, Δy<sub>p</sub>, y<sub>p</sub></th>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb1-1-ozpp">1</td>
            <td class="tb1-2-ozpp">2</td>
            <td class="tb1-3-ozpp">3</td>
            <td class="tb1-4-ozpp">4</td>
            <td class="tb1-5-ozpp">5</td>
            <td class="tb1-6-ozpp">6</td>
            <td class="tb1-7-ozpp">7</td>
         </tr>
         <tr class="article-table__str">
            <td class="fw-700">Первый вариант, точка 795</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp">1</td>
            <td class="tb1-2-ozpp">Загон</td>
            <td class="tb1-3-ozpp">7358866.99</td>
            <td class="tb1-4-ozpp">79°14′25″</td>
            <td class="tb1-5-ozpp">11679.01</td>
            <td class="tb1-6-ozpp">7362314.97</td>
            <td class="tb1-7-ozpp">7982.56</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp">2</td>
            <td class="tb1-2-ozpp">Миус</td>
            <td class="tb1-3-ozpp">7362314.97</td>
            <td class="tb1-4-ozpp">100°18′20″</td>
            <td class="tb1-5-ozpp">7982.56</td>
            <td class="tb1-6-ozpp bb-black-1">-4100.58</td>
            <td class="tb1-7-ozpp bb-black-1">-65.78</td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb1-1-ozpp">3</td>
            <td class="tb1-2-ozpp">Тур</td>
            <td class="tb1-3-ozpp">7357667.90</td>
            <td class="tb1-4-ozpp"></td>
            <td class="tb1-5-ozpp">4610.90</td>
            <td class="tb1-6-ozpp">7358214.39</td>
            <td class="tb1-7-ozpp">7916.78</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">1+ctgβ<sub>1</sub>*ctgθ</td>
            <td class="tb1-3-ozpp">(x<sub>2</sub> - x<sub>1</sub>)</td>
            <td class="tb1-4-ozpp">ctgβ<sub>1</sub></td>
            <td class="tb1-5-ozpp">(y<sub>2</sub> - y<sub>1</sub>)</td>
            <td class="tb1-6-ozpp">ctgβ<sub>1</sub>-ctgθ</td>
            <td class="tb1-7-ozpp">N<sub>1</sub></td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">1-ctgβ<sub>2</sub>*ctgθ</td>
            <td class="tb1-3-ozpp">(x<sub>3</sub> - x<sub>2</sub>)</td>
            <td class="tb1-4-ozpp">ctgβ<sub>2</sub></td>
            <td class="tb1-5-ozpp">(y<sub>3</sub> - y<sub>2</sub>)</td>
            <td class="tb1-6-ozpp">ctgβ<sub>2</sub>+ctgθ</td>
            <td class="tb1-7-ozpp">N<sub>2</sub></td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp">(y<sub>1</sub> - y<sub>3</sub>)</td>
            <td class="tb1-4-ozpp"></td>
            <td class="tb1-5-ozpp">(x<sub>1</sub> - x<sub>3</sub>)</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp"></td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp">B</td>
            <td class="tb1-4-ozpp">ctgθ = A/B</td>
            <td class="tb1-5-ozpp">A</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp">1+ctg<sup>2</sup>θ</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">1.003048</td>
            <td class="tb1-3-ozpp">3447.98</td>
            <td class="tb1-4-ozpp">0.190032</td>
            <td class="tb1-5-ozpp">-3696.45</td>
            <td class="tb1-6-ozpp">0.173991</td>
            <td class="tb1-7-ozpp">-4101.64</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">1.002917</td>
            <td class="tb1-3-ozpp">-4647.07</td>
            <td class="tb1-4-ozpp">-0.181831</td>
            <td class="tb1-5-ozpp">-3371.66</td>
            <td class="tb1-6-ozpp">-0.165790</td>
            <td class="tb1-7-ozpp">-4101.64</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp bb-black-1">7068.11</td>
            <td class="tb1-4-ozpp"></td>
            <td class="tb1-5-ozpp bb-black-1">1199.09</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp"></td>
         </tr>
         <tr class="article-table__str bb-violet-2">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp">-7257.87</td>
            <td class="tb1-4-ozpp">0.016041</td>
            <td class="tb1-5-ozpp">-116.43</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp">1.000257</td>
         </tr>
         <tr class="article-table__str">
            <td class="fw-700">Второй вариант, точка 795</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp">1</td>
            <td class="tb1-2-ozpp">Миус</td>
            <td class="tb1-3-ozpp">7362314.97</td>
            <td class="tb1-4-ozpp">100°18′20″</td>
            <td class="tb1-5-ozpp">7982.56</td>
            <td class="tb1-6-ozpp">7357667.90</td>
            <td class="tb1-7-ozpp">4610.90</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp">2</td>
            <td class="tb1-2-ozpp">Тур</td>
            <td class="tb1-3-ozpp">7357667.90</td>
            <td class="tb1-4-ozpp">129°25′00″</td>
            <td class="tb1-5-ozpp">4610.90</td>
            <td class="tb1-6-ozpp bb-black-1">546.63</td>
            <td class="tb1-7-ozpp bb-black-1">3306.03</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp">3</td>
            <td class="tb1-2-ozpp">Веселый</td>
            <td class="tb1-3-ozpp">7355161.98</td>
            <td class="tb1-4-ozpp"></td>
            <td class="tb1-5-ozpp">11404.46</td>
            <td class="tb1-6-ozpp">7358214.53</td>
            <td class="tb1-7-ozpp">7916.93</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">-0.099720</td>
            <td class="tb1-3-ozpp">-4647.07</td>
            <td class="tb1-4-ozpp">-0.181831</td>
            <td class="tb1-5-ozpp">-3371.66</td>
            <td class="tb1-6-ozpp">-6.229863</td>
            <td class="tb1-7-ozpp">20541.58</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp">5.970857</td>
            <td class="tb1-3-ozpp">-2505.92</td>
            <td class="tb1-4-ozpp">-0.821897</td>
            <td class="tb1-5-ozpp">6793.56</td>
            <td class="tb1-6-ozpp">5.226136</td>
            <td class="tb1-7-ozpp">20541.58</td>
         </tr>
         <tr class="article-table__str">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp bb-black-1">-3421.90</td>
            <td class="tb1-4-ozpp"></td>
            <td class="tb1-5-ozpp bb-black-1">7152.99</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp"></td>
         </tr>
         <tr class="article-table__str bb-violet-1">
            <td class="tb1-1-ozpp"></td>
            <td class="tb1-2-ozpp"></td>
            <td class="tb1-3-ozpp">2207.27</td>
            <td class="tb1-4-ozpp">6.048032</td>
            <td class="tb1-5-ozpp">13349.67</td>
            <td class="tb1-6-ozpp"></td>
            <td class="tb1-7-ozpp">37.578692</td>
         </tr>
      </table>
      <p class="article-blog__txt">После решения второго варианта <strong>обратной засечки</strong> окончательные
         координаты получают как среднее из двух.</p>
      <p class="article-blog__txt mb-0">x<sub>ср</sub> = (7358214.39 + 7358214.53)/2 = 7308214.46</p>
      <p class="article-blog__txt">y<sub>ср</sub> = (7916.78 + 7916.93)/2 = 7916.86</p>
   </article>
   
   <?php
      require_once "../include/footer.php"
   ?>

   <script src="/js/mobile-menu.js"></script>
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>

</html>