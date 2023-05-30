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
        <img data-image="black" src="images/il_1588xN.4123460865_bjfi.webp" alt="" height="430px">
        <img data-image="red" src="images/il_1588xN.4123468843_6xrj.webp" alt="" height="430px">
        <img data-image="blue" src="images/il_1588xN.4075815342_r1nr.webp" alt="" height="430px">
        <img data-image="green" src="images/il_1588xN.4075815364_iwot.webp" alt="" height="430px">
        <img data-image="white" src="images/il_1588xN.4075815318_el07.webp" alt="" height="430px">
        <img data-image="brown" class="active" src="images/il_1588xN.4123460855_i101.webp" alt="" height="430px">
      </div>

      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Шкіряний портмоне</span>
          <h1>Портмоне THVED</h1>
          <p>Завдяки виготовленій вручну високоякісній шкірі, цей двоскладний гаманець стане ідеальним подарунком для творчої людини на замовлення.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Колір</span>

            <div class="color-choose">
                <div>
                    <input data-image="blue" type="radio" id="blue" name="color" value="blue" checked>
                    <label for="blue"><span></span></label>
                  </div>
                  <div>
                    <input data-image="green" type="radio" id="green" name="color" value="green" checked>
                    <label for="green"><span></span></label>
                  </div>
                  <div>
                    <input data-image="white" type="radio" id="white" name="color" value="white" checked>
                    <label for="white"><span></span></label>
                  </div>
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
            </div>

          </div>          

        <!-- Product Pricing -->
        <div class="product-price">
          <span>600 ₴</span>
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