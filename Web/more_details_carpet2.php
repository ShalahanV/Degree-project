<!DOCTYPE html>
<html>
  <head>
    <?php require 'head.php'; ?>
    <link rel="stylesheet" href="css/organizer.css" media="all">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <?php require 'header.php'; ?>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" src="Images/il_1588xN.2818193554_188y.webp" alt="" height="430px">
        <img data-image="gray"  class="active" src="Images/il_1588xN.4558750846_gjfz.webp" alt="" height="430px">
        
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний килим</span>
          <h1>Килим TY43W</h1>
          <p>Наша компанія використовує тільки якісну шкіру і зшиває її тільки вручну. Ми ніколи не використовуємо машини чи електроінструменти під час виробництва. Отже, коли ви купуєте один із наших продуктів, ви не лише отримуєте продукт, який вам потрібен, але й сприяєте розвитку ремесла.</p>
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
          <span>500 ₴</span>
          <a href="#" class="cart-btn">Купити</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    <?php require 'footer.php'; ?>
  </body>
</html>