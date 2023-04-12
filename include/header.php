<header class="header <?php if($_SERVER["REQUEST_URI"] == "/"){echo "bgc-litegray";}?>">
   <div class="header-menu container">
      <a href="/" class="header-menu__logo">Точно<span class="header-menu__logo-point">.</span></a>
      <div class="header-menu__burger">
         <div class="header-menu__burger-line"></div>
         <div class="header-menu__burger-line"></div>
         <div class="header-menu__burger-line"></div>
      </div>
   </div>
   <div class="menu-main">
      <div class="menu-title container">
         <a href="/" class="menu-title__logo">Точно<span class="header-menu__logo-point">.</span></a>
         <div class="menu-title__close">X</div>
      </div>
      <div class="menu-contact">
         <div class="menu-contact__title">Контакты</div>
         <a class="menu-contact__link" href="mailto:hi@tochn.ru">hi@tochn.ru</a>
         <a class="menu-contact__link" href="https://tochn.ru">www.tochn.ru</a>
      </div>
      <nav class="menu-nav">
         <ul class="menu-list">
            <li class="menu-nav__item">
               <a href="/kak-reshit/page" class="menu-nav__link menu-nav__link--kak-reshit">Как решить</a>
            </li>
            <li class="menu-nav__item">
               <a href="/ehto-kak/page" class="menu-nav__link menu-nav__link--ehto-kak">Это как</a>
            </li>
            <li class="menu-nav__item">
               <a href="/kod/page" class="menu-nav__link menu-nav__link--kod">Код</a>
            </li>
            <li class="menu-nav__item">
               <a href="https://t.me/tochnru" class="menu-nav__link menu-nav__link--telegram">Телеграм</a>
            </li>
         </ul>
      </nav>
   </div>
</header>