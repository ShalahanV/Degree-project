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
        <img data-image="brown" class="active" src="Images/il_1588xN.4422160609_qjt5.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряна сумка</span>
          <h1>Сумка QAS1</h1>
          <p>Наша класична сумка з натуральної натуральної шкіри створена для подорожей. Він не лише компактний, але й легкий у транспортуванні та достатньо глибокий, щоб збільшити місткість, що робить його ідеальною сумкою для вихідних.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Колір</span>

            <div class="color-choose">
              
              <div>
                <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                <label for="brown"><span></span></label>
              </div>
              
            </div>

          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>4600 ₴</span>
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