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
        <img data-image="black" src="Images/il_1588xN.2574512973_3bb5.webp" alt="" height="430px">
        <img data-image="red" src="Images/il_1588xN.3800217660_n3dh.webp" alt="" height="430px">
        <img data-image="brown"  class="active" src="Images/il_1588xN.2474361023_akdc.webp" alt="" height="430px">
        <img data-image="green" src="Images/il_1588xN.3805823819_hovt.webp" alt="" height="430px">
       
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний килим</span>
          <h1>Килим DKSIN</h1>
          <p>Килимок для миші створений як стильний аксесуар для комп’ютера без шкоди для зручності та практичності. Він має всі корисні властивості сучасного килимка для миші, такі як неслизька підкладка та виняткова ефективність відстеження завдяки своїй гладкій поверхні, а також зручна підставка для зап’ястя, яка забезпечує ергономічну підтримку ваших зап’ясть.</p>
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
            </div>
          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>400 ₴</span>
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