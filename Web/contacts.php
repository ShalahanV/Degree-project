<!DOCTYPE html>
<html>
   <!--Це файл filel.html-->
   <head>
        <?php require_once 'head.php'; ?>
        <link rel="stylesheet" href="css/index.css" media="all">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
        <script src="contacts.js"></script>
   </head>
<body>
    <div id="wrapper">
      <?php require_once 'header.php'; ?>
                      
         <section id="contact">
  
            <h1 class="section-header">Контакти</h1>
            
            <div class="contact-wrapper">
            
            <!-- Left contact page --> 
              
              <form action="contacts_get_message.php" method="POST" id="contact-form" class="form-horizontal" role="form">
                 
                <div class="form-group">
                  <div class="col-sm-12">
                    <input name="name" type="text" class="form-control" required="required" id="name" placeholder="Імʼя">
                  </div>
                </div>
          
                <div class="form-group">
                  <div class="col-sm-12">
                    <input name="email" type="email" class="form-control" required="required" id="email" placeholder="Email">
                  </div>
                </div>
          
                <textarea name="message" class="form-control" rows="10" placeholder="Повідомлення" required="required"></textarea>
                
                <button name="send" class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
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
    <?php require_once 'footer.php'; ?>        
    </div>
    </body>
    </html>