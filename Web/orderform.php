<!DOCTYPE html>
<html>
   <!--Це файл filel.html-->
   <head>
        <?php require_once 'head.php'; ?>
        <link rel="stylesheet" href="css/index.css" media="all">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
        
   </head>
<body>
    <div id="wrapper">
      <?php require_once 'header.php'; ?>
                      
      <div class="form-container">
    <h2>Замовлення</h2>
    <form>
      <div class="form-group">
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="surname">Прізвище:</label>
        <input type="text" id="surname" name="surname" required>
      </div>
      <div class="form-group">
        <label for="product">Вид товару:</label>
        <input type="text" id="product" name="product" required>
      </div>
      <div class="form-group">
        <label for="model">Модель:</label>
        <input type="text" id="model" name="model" required>
      </div>
      <div class="form-group">
        <label for="model">Колір:</label>
        <input type="text" id="color" name="color" required>
      </div>
      <div class="form-group">
        <label for="model">Адреса:</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      <button type="submit">Відправити</button>
    </form>
    
  </div>
          <!-- Scripts -->
   
    <script src="script.js" charset="utf-8"></script>
    <?php require_once 'footer.php'; ?>        
    </div>
    </body>
    </html>