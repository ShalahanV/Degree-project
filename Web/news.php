<?php
    require_once __DIR__ . "/database/db.php";
    require_once __DIR__ . "/database/functions.php";    
?>

<!DOCTYPE html>
<html>
   <!--Це файл filel.html-->
   <head>
    <?php require_once 'head.php'; ?>
    <link rel="stylesheet" href="css/index.css" media="all">      
   </head>
<body>
    <div id="wrapper">
        <?php require_once 'header.php'; ?>
         <h3 style="text-align:center;">
            Акції та знижки
        </h3> 
    <br>
         <div class="container">
            <div class="row">
            <?php
            $news = get_news_all();
            foreach($news as $new): 
            ?>
                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title"><?= $new["name_month"] ?></h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="<?= $new["news_class"] ?>">
                                        <span class="widget-49-date-day"><?= $new["date_format(`time`,'%d')"] ?></span>
                                        <span class="widget-49-date-month"><?= $new["short_name_month"] ?></span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title"><?= $new["name"] ?></span>
                                        <span class="widget-49-meeting-time"><?= $new["date_format(`time`,'%H:%i')"] ?> год</span>
                                    </div>
                                </div>
                                <ol class="widget-49-meeting-points">
                                    <li class="widget-49-meeting-item"><span><?= $new["point_one"] ?></span></li>
                                    <li class="widget-49-meeting-item"><span><?= $new["point_two"] ?></span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="more_details_new.php?id_new=<?= $new["id_new"]?>" class="btn btn-sm btn-flash-border-primary">Читати</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
            <br>
        <?php require_once 'footer.php'; ?>        
    </div>
    </body>
    </html>