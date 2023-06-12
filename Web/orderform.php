<?php
require_once __DIR__ . "/database/db.php";

$orderNameError = $idCategoryError = $orderModelAccessoryError = $orderColorError = $orderPhoneError =$orderAddressError = $orderNumberError = "";
$orderName = $idCategory = $orderModelAccessory = $orderColor = $orderPhone =$orderAddress = $orderNumber = "";
$isPassed = true;

if (isset($_POST['order'])){
    if (empty($_POST['name_order'])) {
        $orderNameError = "Введіть ваше ПІБ";
        $isPassed = false;
    } else {
        $orderName = trim($_POST['name_order']);

        if (mb_strlen($orderName) < 5 || mb_strlen($orderName) > 120) {
            $orderNameError = "Недопустима довжина ПІБ";
            $isPassed = false;
        }
    }

    if (empty($_POST['id_category'])) {
        $idCategoryError = "Будь ласка, оберіть категорію";
        $isPassed = false;
    } else {
        $idCategory = $_POST["id_category"];
    }

    if (empty($_POST['model_accessory'])) {
        $orderModelAccessoryError = "Введіть обрану модель";
        $isPassed = false;
    } else {
        $orderModelAccessory = filter_var(trim($_POST['model_accessory']), FILTER_UNSAFE_RAW);

        if (mb_strlen($orderModelAccessory) < 3 || mb_strlen($orderModelAccessory) > 15) {
            $orderModelAccessoryError = "Недопустима довжина";
            $isPassed = false;
        }
    }

    if (empty($_POST['color'])) {
        $orderColorError = "Введіть обраний колір";
        $isPassed = false;
    } else {
        $orderColor = filter_var(trim($_POST['color']), FILTER_UNSAFE_RAW);

        if (mb_strlen($orderColor) < 5 || mb_strlen($orderColor) > 15) {
            $orderColorError = "Недопустима довжина";
            $isPassed = false;
        }
    }

    if (empty($_POST['phone'])) {
        $orderPhoneError = "Введіть ваш номер телефону";
        $isPassed = false;
    } else {
        $orderPhone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_NUMBER_INT);

        if (mb_strlen($orderPhone) < 10 || mb_strlen($orderPhone) > 20) {
            $orderPhoneError = "Недопустима довжина номеру";
            $isPassed = false;
        }
    }

    if (empty($_POST['address'])) {
        $orderAddressError = "Введіть місто";
        $isPassed = false;
    } else {
        $orderAddress = trim($_POST['address']);

        if (mb_strlen($orderAddress) < 2 || mb_strlen($orderAddress) > 100) {
            $orderAddressError = "Недопустима довжина";
            $isPassed = false;
        }
    }

    if (empty($_POST['number'])) {
        $orderNumberError = "Введіть відділення";
        $isPassed = false;
    } else {
        $orderNumber = filter_var(trim($_POST['number']), FILTER_SANITIZE_NUMBER_INT);

        if (mb_strlen($orderNumber) < 1) {
            $orderNumberError = "Недопустиме значення";
            $isPassed = false;
        }
    }

    if ($isPassed === true) {
        $query = "INSERT INTO `orders` (`name_order`, `id_category`, `model_accessory`, `color`, `phone`, `address`, `number`, `time_order`) VALUES (:name_order, :id_category, :model_accessory, :phone, :color, :address, :number, NOW())";

        $params = [
            "name_order" => $orderName,
            "id_category" => $idCategory,
            "model_accessory" => $orderModelAccessory,
            "color" => $orderColor,
            "phone" => $orderPhone,
            "address" => $orderAddress,
            "number" => $orderNumber,
        ];

        $prepare = $db->prepare($query);
        $prepare->execute($params);
        
        $toEmail = 'ok23.sanotska.bohdana@vtc.vn.ua';
        $mailHeaders = "Name: " . $orderName .
            "\r\nMessage: " . " нове замовлення\r\n";
        mail($toEmail, $orderName, $mailHeaders);
    
        header('location: ./index.php');
    }
}

$q = "SELECT * FROM categories";
$stmt = $db->query($q);
?>

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
    <form method="POST">
      <div class="form-group">
        <label for="name_order">ПІБ:</label>
        <input type="text" id="name_order" name="name_order" required>
        <p class="error"><?php echo $orderNameError ?></p>
      </div>
      <div class="form-group">
        <label for="id_category">Вид товару:</label>
        <!--<input type="text" id="product" name="id_category" required>-->
        <select name="id_category" required>
            <option value=""></option>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :; ?>
                <option value="<?php echo $row['id_category']; ?>"><?php echo $row["name_category"];?></option>
            <?php endwhile; ?>
        </select>
        <p class="error"><?php echo $idCategoryError ?></p>
      </div>
      <div class="form-group">
        <label for="model_accessory">Модель:</label>
        <input type="text" id="model_accessory" name="model_accessory" required>
        <p class="error"><?php echo $orderModelAccessoryError ?></p>
      </div>
      <div class="form-group">
        <label for="color">Колір:</label>
        <input type="text" id="color" name="color" required>
        <p class="error"><?php echo $orderColorError ?></p>
      </div>
      <div class="form-group">
        <label for="phone">Телефон (0-xx-xxx-xxxx):</label>
        <input type="tel" pattern="[0]{1}-[0-9]{2}-[0-9]{3}-[0-9]{4}" id="phone" name="phone" required>
        <p class="error"><?php echo $orderPhoneError ?></p>
      </div>
      <div class="form-group">
        <label for="address">Місто:</label>
        <input type="text" id="address" name="address" required>
        <p class="error"><?php echo $orderAddressError ?></p>
      </div> 
      <div class="form-group">
        <label for="number">Номер відділення:</label>
        <input type="number" min="1" id="number" name="number" required>
        <p class="error"><?php echo $orderNumberError ?></p>
      </div>      
      <button type="submit" name="order">Відправити</button>
    </form>
    
  </div>
          <!-- Scripts -->
   
    <!--<script src="script.js" charset="utf-8"></script>-->
    <?php require_once 'footer.php'; ?>        
    </div>
    </body>
    </html>