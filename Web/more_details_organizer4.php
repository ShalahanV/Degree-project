<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="css/organizer.css" media="all">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <?php require_once 'header.php'; ?>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="images/il_1588xN.4370973978_ikg3.webp" alt="" height="430px">
        <img data-image="red" src="images/il_1588xN.4370974094_2tf7.webp" alt="" height="430px">
        <img data-image="brown" class="active" src="images/il_1588xN.4418365165_olcu.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний органайзер</span>
          <h1>Органайзер TFBA</h1>
          <p>Шкіра виготовляється шляхом нанесення товстого шару спеціального типу воску на повнозернисту поверхню волової шкіри, яка була згладжена та відполірована, щоб надати їй блиску та гладкості. Віск покращить волокна шкіри та призведе до невеликих змін у тоні, формі та зовнішньому вигляді матеріалу. Зморшки на виробі пов'язані з тим, що шкіра є натуральною і виготовлена натуральним шляхом. Коли продукт використовується, колір продукту набуває більш природного та індивідуального вигляду завдяки природній рідині, що виділяється вашою рукою.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Колір</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
              <div>
                <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                <label for="brown"><span></span></label>
              </div>
            </div>
          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>410 ₴</span>
          <a href="#" class="cart-btn">Купити</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    <?php require_once 'footer.php'; ?>
  </body>
</html>