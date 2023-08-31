<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Магазин</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="nav">
          <a href="index.php" class="logo">
            <img src="img/Logo.svg" />
          </a>
          <ul class="menu">
            <li class="menu__list">
              <a href="index.php" class="menu__link">Главная</a>
            </li>
            <li class="menu__list">
              <a href="#" class="menu__link">Ассортимент</a>
            </li>
            <li class="menu__list">
              <a href="#" class="menu__link">Заказать</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="container__shop">
      <div class="shop__title">
        <div class="shop__text">
          <a href="index.php">Главная</a> /<a href="shop.html"> Магазин</a>
        </div>
      </div>
        <div class="left-column">
          <div class="slider-container">
          <div class="slider">
            <img src="img/1.jpg"  alt="">
            <img src="img/2.png"  alt="">
            <img src="img/3.jpg"  alt="">
            <img src="img/4.png" alt="">
            <img src="img/5.jpg"  alt="">
          </div>
          <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
          <button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
        </div>
      </div>
      <div class="right-column">
        <div class="product-description">
          <span>Цветок</span>
    
          <h1>Аглаонема</h1>
          <div class="card__price">100 </div>
          <p>
            Аглаонема Красный Циркон (лат. Aglaonema Red Zirkon) - удивительное очень красивое декоративно - лиственное растение, листовые пластины которого имеют насыщено-зеленую центральную прожилку и вкрапления такого же цвета, середина листовых пластин наполнена вкраплениями розовым или розово-коралловым цвета на желто-зеленой поверхности. Стебли и черешки окрашены в зеленый цвет. Насыщенно-зеленая кайма расположена по всему контуру листвы. Вырастить его может даже неопытный цветовод-любитель. 
          </p>
        </span>

      </div>
      <div class="product-configuration">
        <div class="product-price">
          <button class="buy-btn">
            <a href="#" class="buy-btn__text button" id="open__pop__up">Закажите сейчас</a>
          </button>
        </div>
      </div>
    </main>
    <div class="tab-container">
  <button class="tab-button active" onclick="changeTab(0)"><span class="menu__link">Описание</span></button>
  <button class="tab-button " onclick="changeTab(1)"><span class="menu__link">Характеристики</span></button>

  <div class="tab-content">
    <div class="tab-panel tab__description">Аглаонема - комнатное растение, которое хорошо растет на восточной или западной сторонах. Характеризуется короткими веточками, на которых распускаются кожистые, зеленые листья овальной формы с заостренным кончиком и контрастным, малиновым краем. В домашних условиях цветет крайне редко. Соцветие имеет вид початка, прикрытого светлым покрывалом. После завершения периода цветения формируются ягоды.</div>
    <div class="tab-panel">
      <div class= "Specifications">
        <div class="Specifications__type">Тип продукта</div>
        <div class="Specifications__text">Комнатное растение</div>
      </div>
      <div class= "Specifications">
        <div class="Specifications__type">Тип растения</div>
        <div class="Specifications__text">
Декоративно-лиственное растение</div>
      </div>
      <div class= "Specifications">
        <div class="Specifications__type">Цвет листвы</div>
        <div class="Specifications__text">Зеленый</div>
      </div>
      <div class= "Specifications">
        <div class="Specifications__type">Высота растения max (см)</div>
        <div class="Specifications__text">35</div>
      </div>
      <div class= "Specifications">
        <div class="Specifications__type">Страна производства
</div>
        <div class="Specifications__text">Россия</div>
      </div>
    </div>

  </div>
</div>
    <div class="pop__up" id="pop__up">
      <div class="pop__up__container">
        <div class="pop__up__body" id="pop__up__body">
          <p>Оставить заявку</p>
          <form action="">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Телефон">
            <button>Оставить заявку</button>
          </form>
          <div class="pop__up__close" id="pop__up__close">&#10006</div>
        </div>
      </div>
    </div>

    <footer class="footer">
        <div class="container">
          <div class="footer__nav">
            <a href="" class="logo">
              <img src="img/Logo.svg" />
            </a>
            <a href="" class="footer__contacts">
              <img src="img/Location.png" />
              <p>Воронеж, ул. Пирогова, 15, корп. 2</p>
            </a>
            <a href="" class="footer__contacts">
              <img src="img/Message.png" />
              <p>contact@greenshop.com</p>
            </a>
            <a href="" class="footer__contacts">
              <img src="img/Calling.png" />
              <p>+7 191 171 74 90</p>
            </a>
          </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
