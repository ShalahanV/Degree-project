<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@600&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=IBM+Plex+Serif:wght@600&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=IBM+Plex+Serif:wght@600&family=Montserrat+Alternates:wght@200&family=Noto+Serif:ital,wght@1,700&family=Tenor+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/organizer.css" media="all">      
    <title>STYLE</title>
    
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
        <img data-image="black"  src="images/il_1588xN.3751729371_cvgv.jpg" alt="" height="430px">
        <img data-image="gray" src="images/il_1588xN.3751730067_qott.webp" alt="" height="430px">
        <img data-image="bodily" src="images/il_1588xN.3751731381_3ksp.webp" alt="" height="430px">
        <img data-image="brown"  class="active" src="images/il_1588xN.3704142626_i8c8.jpg" alt="" height="430px">
        <img data-image="yellow" src="images/il_1588xN.3751729501_rx29.webp" alt="" height="430px">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний фотобрелок</span>
          <h1>Фотобрелок uk5WAX</h1>
          <p>Цей персоналізований шкіряний брелок із фотографіями стане унікальним подарунком для мами чи тата вперше, на день народження, ювілей, день матері або день батька. Перетворіть свій образ або образ коханої людини в стиль, який завжди буде поруч з вами. Якість зображення, надрукованого на металі, буде дуже чітким і чітким і не зникає з часом.</p>
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
                <input data-image="gray" type="radio" id="gray" name="color" value="gray" checked>
                <label for="gray"><span></span></label>
              </div>
              <div>
                <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                <label for="brown"><span></span></label>
              </div>
              <div>
                <input data-image="bodily" type="radio" id="bodily" name="bodily" value="bodily">
                <label for="bodily"><span></span></label>
              </div>
              <div>
                <input data-image="yellow" type="radio" id="yellow" name="yellow" value="yellow">
                <label for="yellow"><span></span></label>
              </div>
            </div>

          </div>

          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>50 ₴</span>
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
