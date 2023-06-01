<?php
    require_once __DIR__ . "/database/db.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<html>
   <!--Це файл filel.html-->
   <head>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="css/index.css" media="all">      
   </head>
<body>
    <div id="wrapper">
      <?php require_once 'header.php'; ?>  
            <main class="l-card">
            <?php
            $id_new = $_GET["id_new"];
            $query = $db->prepare("SELECT * FROM news WHERE id_new = :id_new");
            $query->execute(["id_new" => $id_new]);
            $new = $query->FETCH(PDO::FETCH_ASSOC);
            if(!$new){
              echo '<h5 class="card-title">Запис не знайдено</h5>';
              die();
          }
            ?>
                <section class="l-card__text">
                    <p><?= $new["text"] ?></p>                   
                </section>
                <section class="l-card__user">
                    <div class="l-card__userInfo">
                        <span>Ваш STYLE</span>
                    </div>
                </section>
            </main>
       <br>
       <?php require_once 'footer.php'; ?>        
    </div>
  </body>
</html>