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
        <img data-image="black" src="images/il_1588xN.4431434118_hxqa.webp" alt="" height="430px">
        <img data-image="red" src="images/il_1588xN.4090366035_6qjy.webp" alt="" height="430px">
        <img data-image="green" src="images/il_1588xN.4377205779_mfns.webp" alt="" height="430px">
        <img data-image="brown" class="active" src="images/il_1588xN.3993635943_f7ju.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний фотобрелок</span>
          <h1>Фотобрелок OPD4</h1>
          <p>Персоналізований брелок із фотографіями, брелок із зображеннями, подарунок для чоловіків, подарунок для жінок, шкіряний брелок ручної роботи, брелок із зображенням, подарунок коханому, подарунок на ювілей, брелок із фотографією, персоналізований брелок із фотографією, любов, день народження, сім’я, різдво, щасливий новий рік.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Колір</span>

            <div class="color-choose">
                <div>
                    <input data-image="black" type="radio" id="black" name="color" value="black">
                    <label for="black"><span></span></label>
                  </div>
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                <label for="brown"><span></span></label>
              </div>
              <div>
                <input data-image="green" type="radio" id="green" name="green" value="green">
                <label for="green"><span></span></label>
              </div>              
            </div>
          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>50 ₴</span>
          <a href="orderform.php" class="cart-btn">Купити</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    <?php require_once 'footer.php'; ?>
  </body>
</html>