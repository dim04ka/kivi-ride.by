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
 
<div class="work">
  <div class="container">
    
    <div class="work-row">
      <div class="work-col work-col-text">
        <h1>Работа у нас</h1>
        <p>Работа с нами — это свобода управлять своим временем и доходом</p>
        <form action="/mail.php" type="POST" class="work-form">
          <div class="field">
            <input type="text" class="work-input" name="name" placeholder="Ваше имя" required>
          </div>
          <div class="field">
            <input type="text" class="work-input" name="phone" placeholder="+375291234567" required>
          </div>
          <div class="field">
            <input type="text" class="work-input" name="work" placeholder="Вид деятельности">
          </div>
          <div class="field">
            <input type="text" class="work-input" name="comment" placeholder="Комментарий">
          </div>
          <div class="field">
            <input type="submit" class="work-btn" value="Отправить">
          </div>
        </form>
      </div>
      <div class="work-col work-col-img">
        <div class="work-img work-img-1"></div>
      </div>
    </div>
  </div>
  <div class="modal">
    <div class="modal-text">
      <div class="modal-icon"></div>
      Спасибо
    </div>
</div>
</div>
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
          <a href="/" target="_blank" class="footer-icons footer-icons-inst"></a>
          <a href="/" target="_blank" class="footer-icons footer-icons-vk"></a>
        </div>
      </div>
    </div>
    <div class="footer-row footer-row-center">
      ©2020. Разработано&#160;<a href="http://biz-up.by/">BizUp Studio</a> 
    </div>
  </div>
</section>
<!-- <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjPHFAzv1EpXDfAcMG-Bcj0QXl2_VfJ2M&libraries=places&callback=initMap" async defer></script> -->
<script src="js/app.js"></script>

</body>
</html> 