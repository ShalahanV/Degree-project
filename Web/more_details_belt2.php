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
        <img data-image="brown" class="active" src="Images/il_1588xN.4556157935_l1co.avif" alt="" height="430px">
        <img data-image="blue"  src="Images/il_1588xN.3670251747_s519.avif" alt="" height="430px">
        <img data-image="green"  src="Images/il_1588xN.4508788990_oyue.avif" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний ремінь</span>
          <h1>Pемінь ANTT65</h1>
          <p>У нас є ідеальний подарунок для чоловіків! Цей індивідуальний шкіряний ремінь - не тільки стильний аксесуар, але й чудовий спосіб вразити свого чоловіка чи хлопця на День Святого Валентина.</p>
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
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
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