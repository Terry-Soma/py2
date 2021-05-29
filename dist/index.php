<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pro dental</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="./css/style.css" />  
    <link
      rel="stylesheet"
      media="screen and (max-width:768px)"
      href="./css/mobile.css"
    />
    <link
      rel="stylesheet"
      media="screen and (min-width: 1100px)"
      href="./css/widescreen.css"
    />
  </head>
  <body id="home">
    <!-- main nav -->
    <nav id="navbar">
      <h1 class="logo">
        <span class="text-primary"><i class="fas fa-tooth"></i> Pro </span>
        Dental
      </h1>
      <ul>
        <li><a href="#home">Эхлэл</a></li>
        <li><a href="#what">Төхөөрөмж</a></li>
        <li><a href="#who">Бид</a></li>
        <li><a href="#contact">Сэтгэгдэл</a></li>
        <li><a href="./contact.php">Цаг авах</a></li>
      </ul>
    </nav>

    <!-- showcase -->
    <header id="showcase">
      <div class="showcase-content">
        <h1 class="l-leading">
          <span class="text-primary">Шүд</span> эрүүл бол бие
          <span class="text-primary"> эрүүл</span>
        </h1>
        <p class="lead">Шүдний асуудлыг бидэнд даатга</p>
        <a href="#who" class="btn">Бидний тухай</a>
      </div>
    </header>

    <!-- тоног төхөөрөмж
     -->
    <section id="what" class="bg-light py-1">
      <h2 class="m-heading text-c">
        Тоног <span class="text-primary">төхөөрөмж</span>
      </h2>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img
            src="./img/tonog/quang-tri-nguyen-ER1vKAWRqns-unsplash.jpg"
            style="width: 100%"
          />
          <div class="text">Тоног төхөөрөмж №1</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img
            src="./img/tonog/engin-akyurt-WQ5fGfFHGZ0-unsplash.jpg"
            style="width: 100%"
          />
          <div class="text">Тоног төхөөрөмж №2</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img
            src="./img/tonog/juan-carlos-rivera-AjyMsF2yHbQ-unsplash.jpg"
            style="width: 100%"
          />
          <div class="text">Тоног төхөөрөмж №3</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br />

      <!-- The dots/circles -->
      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </section>

    <!-- section: Бид хэн бэ -->
    <section id="who">
      <div class="who-img"></div>
      <div class="who-text bg-dark p-2">
        <h2 class="m-heading">
          <span class="text-primary">Бидний </span> тухай
        </h2>
        <p class="text-c">
          Манай байгууллага 2000 оноос эхлэн ард түмнийхээ амны эрүүл мэндийн
          энхийн манаанд цагаан халаадтайгай асран тэтгэж буй байгууллага билээ.
        </p>
        <h3>Ерөнхий эмч, ажилтан</h3>
        <ul class="list">
          <li>Болд Сувд : Захирал</li>
          <li>Бат Чимгээ : Ерөнхий эмч</li>
          <li>Өлзийсайхан : Эмч</li>
          <li>Сувд Батчимэг : Угтагч, зөвлөгч</li>
        </ul>
      </div>
    </section>

    <!-- setgegdeluud -->
    <section id="comment">

      <div class="wrapper containe">
        <div class="box">
          <i class="fas fa-quote-left quote"></i>
          <p>
            Их сайхан эмнэлэг байна лээ. Эмч нар нь их сайхан ааштай сувилахуйнн
            дээд зэргийн боловсролтой. Эмчлүүлсэндээ баяртай байна
          </p>
          <div class="content">
            <div class="info">
              <div class="name">Батаа Сүхээ</div>
              <div class="job">Доктор | эмч</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="./img/profile.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-quote-left quote"></i>
          <p>
            Их сайхан эмнэлэг байна лээ. Эмч нар нь их сайхан ааштай сувилахуйнн
            дээд зэргийн боловсролтой. Эмчлүүлсэндээ баяртай байна
          </p>
          <div class="content">
            <div class="info">
              <div class="name">Эрдэнэбат Сүндэрмээ</div>
              <div class="job">Бизнесмэн | эрдэмтэн</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="./img/profile.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-quote-left quote"></i>
          <p>
            Их сайхан эмнэлэг байна лээ. Эмч нар нь их сайхан ааштай сувилахуйнн
            дээд зэргийн боловсролтой. Эмчлүүлсэндээ баяртай байна
          </p>
          <div class="content">
            <div class="info">
              <div class="name">Дорж, Сүхээ.</div>
              <div class="job">Жолооч |</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="./img/profile.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </body>
  </section>

  <!-- contact form -->
  <section id="contact">
    <div class="contact-form bg-primary p-2">
      <h2 class="m-heading">Сэтгэгдэл үлдээх</h2>
      <p>Доорх талбаруудыг бөглөн бидэнд сэтгэгдлээ илгээнэ үү</p>
      <form id="form">
        <div id="alert"></div>
        <div class="form-group">
          <label for="name">Нэр</label>
          <input type="text" name="name" id="name" placeholder="Нэрээ оруулна уу">
        </div>

     
        <div class="form-group">
          <label for="msg">Таны сэтгэгдлээ оруулах хэсэг</label>
          <textarea type="text" name="comment" id="name" placeholder="сэтгэгдлээ оруулна уу"></textarea>
        </div>
       
        <div class="form-group">
          <input   type="submit" value="Илгээх" class="btn btn-dark">
          </div>

      </form>
    </div>

    <div class="map"></div>
  </section>
  <footer id="main-footer" class="bg-dark text-c py-1">
    <div class="container">
      <p> &copy 2021, Pro Dental Бүх эрх хуулиар хамгаалагдав</p>
    </div>
  </footer>

  <script src="./js/map.js"></script>
  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKNIni1GMIJg_5T3f-m98CVwBsoUaSahw&callback=initMap">
</script>
  <script src="./js/slide.js"></script>
  <script src="./js/addComment.js"></script>
</html>
