<html>
   <!--Це файл filel.html-->
   <head>
    <title>STYLE</title>
        <meta charset="utf-8">
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
        <link rel="stylesheet" href="css/index.css" media="all">      
   </head>
<body>
    <div id="wrapper">
      <?php require 'header.php'; ?>
                      
         <section id="contact">
  
            <h1 class="section-header">Контакти</h1>
            
            <div class="contact-wrapper">
            
            <!-- Left contact page --> 
              
              <form id="contact-form" class="form-horizontal" role="form">
                 
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" placeholder="Імʼя" name="name" value="" required>
                  </div>
                </div>
          
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="" required>
                  </div>
                </div>
          
                <textarea class="form-control" rows="10" placeholder="Повідомлення" name="message" required></textarea>
                
                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
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
            
          </section>  
             <!-- Scripts -->
   
    <script src="script.js" charset="utf-8"></script>
    <?php require 'footer.php'; ?>        
    </div>
    </body>
    </html>