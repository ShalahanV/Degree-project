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
        <img data-image="bodily" src="Images/il_1588xN.3450348859_squk.avif" alt="" height="430px">
        <img data-image="black" src="Images/il_1588xN.3450348855_5c7c.avif" alt="" height="430px">
        <img data-image="blue" src="Images/il_1588xN.3450348855_5c7c.avif" alt="" height="430px">
        <img data-image="brown" class="active" src="Images/il_1588xN.1808957379_sf25.avif" alt="" height="430px">
        <img data-image="green" src="Images/il_1588xN.3402687008_sgkm.avif" alt="" height="430px" >
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний портмоне</span>
          <h1>Портмоне  SU7G</h1>
          <p>Представляємо наш стильний і функціональний шкіряний гаманець, призначений для розміщення до шести кредитних карток, двох відділень для купюр і однієї кишені для монет із надійною застібкою-блискавкою. Гаманець закріплений безпечними кнопками, які запобігають випаданню будь-яких предметів.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Колір</span>

            <div class="color-choose">
               
                <div>
                <input data-image="black" type="radio" id="black" name="color" value="black" checked>
                <label for="black"><span></span></label>
              </div>
              <div>
                <input data-image="bodily" type="radio" id="bodily" name="color" value="bodily">
                <label for="bodily"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
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
          <span>900 ₴</span>
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