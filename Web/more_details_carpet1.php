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
        <img data-image="black" src="images/il_1588xN.3562438754_o1zi.webp" alt="" height="430px">
        <img data-image="red" src="images/il_1588xN.3562439496_9yub.webp" alt="" height="430px">
        <img data-image="brown"  src="images/il_1588xN.4083289231_8vrw.webp" alt="" height="430px">
        <img data-image="green" src="images/il_1588xN.3562439504_hz2m.webp" alt="" height="430px">
        <img data-image="bordo" class="active" src="images/il_1588xN.4695366806_kth8.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний килим</span>
          <h1>Килим E4FTN</h1>
          <p>Легко транспортувати та використовувати будь-де. Витончений і тонкий дизайн для вашого столу. Ідеальне доповнення для вашого робочого місця та витончений захист для вашого ноутбука.</p>
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
              <div>
                <input data-image="green" type="radio" id="green" name="color" value="green">
                <label for="green"><span></span></label>
              </div>
              <div>
                <input data-image="bordo" type="radio" id="bordo" name="color" value="bordo">
                <label for="bordo"><span></span></label>
              </div>
            </div>
          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>850 ₴</span>
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