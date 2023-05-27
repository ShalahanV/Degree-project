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
        <img data-image="bodily" src="images/il_1588xN.4225754859_337k.webp" alt="" height="430px">
        <img data-image="red" src="images/il_1588xN.4178106630_m039.webp" alt="" height="430px">
        <img data-image="brown" class="active" src="images/il_1588xN.4225755875_15in.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний портмоне</span>
          <h1>Портмоне  ЕSIN</h1>
          <p>Гаманці – це важливий предмет щоденного носіння. Вони захищають неймовірно цінні предмети, зокрема ідентифікаційні документи, дебетові та кредитні картки та готівку. У жіночому гаманці можуть бути кишені для кредитних карток, складених купюр і квитанцій.</p>
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
                <input data-image="bodily" type="radio" id="bodily" name="color" value="bodily">
                <label for="bodily"><span></span></label>
              </div>
              <div>
                <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                <label for="brown"><span></span></label>
              </div>
            </div>

          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>890 ₴</span>
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