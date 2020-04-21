  <!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kivi</title>

  <link rel="shortcut icon" href="favicon.ico" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Average+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(55726756, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/55726756" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149865887-1"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'UA-149865887-1');
 </script>
</head>
<body>
  <section class="header">
    <div class="container">
        <div class="header-row">
            <div class="header-col header-col-logo">
                <a href="/index.php">
                    <div class="header__logo"></div>
                </a>
            </div>
            <div class="header-col header-col__menu">
                <div class="header-btn"><span></span></div>
                <ul class="header-ul">
                    <li class="header-li">
                        <a href="/koncept.php" class="header-a">Концепция</a>
                    </li>
                    <li class="header-li">
                        <a href="/buisness.php" class="header-a">Для бизнеса</a>
                    </li>
                    <li class="header-li">
                        <a href="/tarif.php" class="header-a">Тарифы</a>
                    </li>
                    <li class="header-li">
                        <a href="/dostavka.php" class="header-a">Доставка</a>
                    </li>
                    <li class="header-li">
                        <a href="/work.php" class="header-a">Работа у нас</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
 
  <section class="main">
  <div class="video-bg">
    <video width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop" >
        <source src="src/img/speed3.mp4" type="video/mp4"></source>
    </video>
  </div>
  <div class="container">
    <div class="main-row">
      <div class="main-col">
        <div class="main-title">Двигайся в стиле</div>
        <div class="main-leftLogo"></div>
      </div>
      <div class="main-col main-col-form">
          <div class="tab">
            <button class="tablinks active" value="devilery">Пеший курьер</button>
            <button class="tablinks" value="devilerytaxi">Доставка</button>
            <button class="tablinks" value="taxi">Такси</button>
          </div>
        <div class="main-forms">
          <div class="main-dev devilery active">
            <form action="" class="form form-send1">
              <input hidden name="type" value="1">
              <div class="form-wrapper">
                <div class="field">
                  <input class="field-input" type="text" name="point" placeholder="Откуда везем " required>
                  <input class="field-input field-input-podezd" name="pointEntrance" type="text" placeholder="Подъезд">
                  <input class="field-input field-input-kv" type="text" name="pointRoom" placeholder="Квартира">
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="point" placeholder="Куда везем">
                  <input class="field-input field-input-podezd" type="text" name="pointEntrance" placeholder="Подъезд">
                  <input class="field-input field-input-kv" type="text" name="pointRoom" placeholder="Квартира">
                </div>
                <div class="field">
                  <button type="button" class="btn-add">Добавить адрес</button>
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="clientName" placeholder="Ваше имя">
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="clientPhone" placeholder="+375291234567" required>
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="time" placeholder="Время доставки с.. по..">
                </div>
                <div class="field">
                  <textarea class="field-textarea" type="text" name="comment" placeholder="Напишите, что и когда привезти" rows="2"></textarea>
                </div>
                <div class="field">
                  <button type="submit" class="btn-send">Отправить заказ</button>
                </div>
              </div>
            </form>
          </div>
          <div class="main-dev devilerytaxi">
            <form action="" class="form">
              <input hidden name="type" value="2">
              <div class="form-wrapper">
                <div class="field">
                  <input class="field-input" type="text" name="point" placeholder="Откуда везем " required>
                  <input class="field-input field-input-podezd" name="pointEntrance" type="text" placeholder="Подъезд">
                  <input class="field-input field-input-kv" type="text" name="pointRoom" placeholder="Квартира">
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="point" placeholder="Куда везем">
                  <input class="field-input field-input-podezd" type="text" name="pointEntrance" placeholder="Подъезд">
                  <input class="field-input field-input-kv" type="text" name="pointRoom" placeholder="Квартира">
                </div>
                <div class="field">
                  <button type="button" class="btn-add">Добавить адрес</button>
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="clientName" placeholder="Ваше имя">
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="clientPhone" placeholder="+375291234567" required>
                </div>
                <div class="field">
                  <input class="field-input" type="text" name="time" placeholder="Время доставки с.. по..">
                </div>
                <div class="field">
                  <textarea class="field-textarea" type="text" name="comment" placeholder="Напишите, что и когда привезти" rows="2"></textarea>
                </div>
                <div class="field">
                  <button type="submit" class="btn-send">Отправить заказ</button>
                </div>
              </div>
            </form>
          </div>
          <div class="main-dev taxi">
            <form action="" class="form">
              <input hidden name="type" value="3">
              <div class="form-wrapper">
                <div class="field">
                  <input class="field-input taxi-input" name="point" type="text" placeholder="Откуда везем " required>
                  <input class="field-input taxi-input field-input-podezd" name="pointEntrance" type="text" placeholder="Подъезд">
                </div>
                <div class="field">
                  <input class="field-input taxi-input" type="text" name="point" placeholder="Куда везем">
                  <input class="field-input taxi-input field-input-podezd" name="pointEntrance" type="text" placeholder="Подъезд">
                </div>
                <div class="field">
                  <button type="button" class="btn-add">Добавить адрес</button>
                </div>
                <div class="field">
                  <input class="field-input taxi-input" type="text" name="clientName" placeholder="Ваше имя">
                </div>
                <div class="field">
                  <input class="field-input taxi-input" type="text" name="clientPhone" placeholder="+375291234567" required>
                </div>
                <div class="field">
                  <textarea class="field-textarea taxi-input" type="text" name="comment" placeholder="Комментарий к заказу" rows="2"></textarea>
                </div>
                <div class="field">
                  <button type="submit" class="btn-send">Такси от 3,3 рублей</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="main-downBlock">
          <a href="/news1.php" target="_blank" class="main-downBlock-text active">Запуск сервиса<br> доставки в Минске</a>
          <a href="/buisness.php" target="_blank" class="main-downBlock-text">Выгодное предложение<br> для бизнеса</a>
          <a href="/dostavka.php" target="_blank" class="main-downBlock-text">Доставка курьером<br> и на авто</a>
          <a href="/tarif.php" target="_blank" class="main-downBlock-text">Вызвать такси в Минске<br> по доступным ценам </a>
          <a href="/work.php" target="_blank" class="main-downBlock-text"> Работа курьером<br> в Минске </a>
          <div class="main-downBlock-icon"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjPHFAzv1EpXDfAcMG-Bcj0QXl2_VfJ2M&libraries=places&callback=initMap" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>

  function initMap() {

    var inputs = $('.searchTextField');
    var options = {
        componentRestrictions: {country: 'by'}
    };

    $(inputs).each(function (i, element) {

    var autocomplete = new google.maps.places.Autocomplete(element, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var place = autocomplete.getPlace();
        console.log(place.geometry.location.lat());
        console.log(place.geometry.location.lng());
        });
    });
  }

</script>

  <section class="footer">
  <div class="container">
    <div class="footer-row footer-row-sb">
      <div class="footer-col">
        <div class="footer-up">
          Для корпоративных клиентов<br>
          <a href="tel:+375297007979">+375 (29) 700 79 79</a><br>
          Отдел техподдержки<br>
          <a href="tel:+375296620272">+375 (29) 662 02 72</a><br>
        </div>
        <div>
          <a href="mailto:service@7890.by">service@7890.by</a> - служба поддержки<br>
          <a href="mailto:info@7890.by">info@7890.by</a> - служба поддержки
        </div>
      </div>
      <div class="footer-col">
        <div class="footer-up">ООО "7890-сервис" УНП 193302989<br> адрес: г.Минск, ул.Тимирязева, 65а, офис 216В, к.73</div>
        <div>Свидетельство о госрегистрации №0158489<br> выдано Минским горисполкомом 28.08.2019г</div>
      </div>
      <div class="footer-col">
        <div class="footer-up">Время работы администрации<br> Пн-Пт с 11 до 18</div>
        <div>
         <a href="/files/2.pdf" target="_blank" class="footer-download">Пользовательское соглашение</a><br>
         <a href="/files/1.pdf" target="_blank" class="footer-download">Политика конфиденциальности</a><br>
         <a href="/files/3.pdf" target="_blank" class="footer-download">Публичный договор</a>
        </div>
      </div>
      <div class="footer-col footer-col-verticalmiddle">
        <div class="footer-icon">
          <a href="https://www.instagram.com/kivi_ride" target="_blank" class="footer-icons footer-icons-inst"></a>
          <a href="https://vk.com/public194341574" target="_blank" class="footer-icons footer-icons-vk"></a>
          <a href="/" target="_blank" class="footer-icons footer-icons-ya"></a>
          <a href="https://g.page/kivi-ride?gm target=" target="_blank" class="footer-icons footer-icons-g"></a>
        </div>
      </div>
    </div>
    <div class="footer-row footer-row-center">
      ©2020. Разработано&#160;<a href="http://biz-up.by/">BizUp Studio</a> 
    </div>
  </div>
</section>
<script src="js/app.js"></script>
</body>
</html> 
  
 
