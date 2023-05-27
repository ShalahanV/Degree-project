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
        <img data-image="black" class="active" src="Images/il_1588xN.3949519743_ld1b.avif" alt="" height="430px">
        <img data-image="gray"   src="Images/il_1588xN.3949519241_19rb.webp" alt="" height="430px">        
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний килим</span>
          <h1>Килим JLO9R</h1>
          <p>Зроблений вручну з любов’ю та турботою, цей настільний килимок виготовлений із 100% екологічно чистих матеріалів (пробка та шкіра з кори дерева). Цей килимок добре працює як килимок для столу та килимка для миші. Це підніме ваш досвід роботи на новий рівень. Ще одна продумана ідея подарунка для вашої родини, друзів і колег.</p>
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
                <input data-image="gray" type="radio" id="gray" name="color" value="gray">
                <label for="gray"><span></span></label>
              </div>              
            </div>
          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>700 ₴</span>
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