<?php
require_once __DIR__ . "/database/db.php";

$contactNameError = $contactEmailError = $contactMessageError = "";
$contactName = $contactEmail =$contactMessage = "";
$isPassed = true;

if (isset($_POST['send'])){
    if (empty($_POST['name_contact'])) {
        $contactNameError = "Введіть ім'я";
        $isPassed = false;
    } else {
        $contactName = filter_var(trim($_POST['name_contact']), FILTER_UNSAFE_RAW);

        if (mb_strlen($contactName) < 2 || mb_strlen($contactName) > 50) {
            $contactNameError = "Недопустима довжина імені";
            $isPassed = false;
        }
    }

    if (empty($_POST['email_contact'])) {
        $contactEmailError = "Введіть Email";
        $isPassed = false;
    } else {
        $contactEmail = filter_var(trim($_POST['email_contact']), FILTER_SANITIZE_EMAIL);

        if (mb_strlen($contactEmail) > 100) {
          $contactEmailError = "Недопустима довжина Email";
          $isPassed = false;
        }
    }

    if (empty($_POST['message_contact'])) {
        $contactMessageError = "Введіть повідомлення";
        $isPassed = false;
    } else {
        $contactMessage = trim($_POST['message_contact']);

        if (mb_strlen($contactMessage) < 10 || mb_strlen($contactMessage) > 190) {
            $contactMessageError = "Недопустима довжина повідомлення";
            $isPassed = false;
        }
    }

    if ($isPassed === true) {
        $query = "INSERT INTO `contacts` (`name_contact`, `email_contact`, `message_contact`, `time_contact`) VALUES (:name_contact, :email_contact, :message_contact, NOW())";
        $params = [
            "name_contact" => $contactName,
            "email_contact" => $contactEmail,
            "message_contact" => $contactMessage,
        ];

        $prepare = $db->prepare($query);
        $prepare->execute($params);

        $toEmail = 'ok23.sanotska.bohdana@vtc.vn.ua';
        $mailHeaders = "Name: " . $contactName .
        "\r\n Email: " . $contactEmail .
        "\r\n Message: " . $contactMessage . " \r\n";
    
        mail($toEmail, $contactName, $mailHeaders);

        header('location: ./index.php');
    }
}

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
                      
         <section id="contact">
  
            <h1 class="section-header">Контакти</h1>
            
            <div class="contact-wrapper">
            
            <!-- Left contact page --> 
              
              <form method="POST" id="contact-form" class="form-horizontal" role="form">
                 
                <div class="form-group">
                  <div class="col-sm-12">
                    <input name="name_contact" type="text" class="form-control" required id="name" placeholder="Імʼя">
                    <p class="error"><?php echo $contactNameError ?></p>
                  </div>
                </div>
          
                <div class="form-group">
                  <div class="col-sm-12">
                    <input name="email_contact" type="email" class="form-control" required id="email" placeholder="Email">
                    <p class="error"><?php echo $contactEmailError ?></p>
                  </div>
                </div>
          
                <textarea name="message_contact" class="form-control" rows="10" placeholder="Повідомлення" required></textarea>
                <p class="error"><?php echo $contactMessageError ?></p>
                
                <button name="send" class="btn btn-primary send-button" id="submit" type="submit" value="send">
                  <div class="alt-send-button">
                    <i class="fa fa-paper-plane"></i><span class="send-text">Надіслати</span>
                  </div>
                
                </button>
                
              </form>
              
            <!-- Left contact page --> 
              
                <div class="direct-contact-container">
          
                  <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Вінниця,проспект Юності 4</span></i></li>
                    
                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(+380) 93-5954-715</a></span></i></li>
                    
                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">supportrstyle@gmail.com</a></span></i></li>
                    
                  </ul>                 
          
                </div>
              
            </div>
            <br>
          </section>  
             <!-- Scripts -->
    <!--<script src="script.js" charset="utf-8"></script>-->
    <?php require_once 'footer.php'; ?>      
    </div>
    </body>
    </html>