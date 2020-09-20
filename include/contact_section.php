<div id="formContatti" class="thm-container">
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content">
                     <div class="title">
                         <span>Richiedi un Preventivo. E' gratuito e senza impegno!</span>
                         <h2>Scrivici adesso!</h2>
                     </div><!-- /.title -->
                     <form action="./include/sendmail/verifica.php" method="POST" class="contact-form" novalidate="novalidate">
                         <input type="text" name="name" placeholder="Il Tuo Nome">
                         <input type="text" name="email" placeholder="La Tua Email">
                         <textarea name="message" placeholder="A Cosa Sei Interessato/a?"></textarea>
                         <button type="submit" class="thm-btn yellow-bg">Invia</button>
                         <div class="form-result"></div><!-- /.form-result -->
                     </form>
                     <?php
                     if(isset($_GET['erore']) || !empty($_GET['errore'])){
                         echo $_GET['errore'];
                     };?>
                 </div><!-- /.contact-form-content -->

             </div><!-- /.col-md-8 -->

             <div class="col-md-4">
                 <div class="contact-info text-center">
                     <div class="title text-center">
                        <span>Chiama Direttamente</span>
                        <h2>Contatti</h2>
                     </div><!-- /.title -->
                     <div class="single-contact-info">
                         <h4>Dove siamo</h4>
                         <p>MILANO <br>Lombardia, Italia</p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Telefono</h4>
                         <p>Mobile: +39 3246 0966 12</p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Email</h4>
                         <p><a href="mailto:info@mrwolfdesigner.com?subject=Richiesta_informazioni_web">info@mrwolfdesigner.com</a></p>
                     </div><!-- /.single-contact-info -->
                     <!-- <div class="single-contact-info">
                         <h4>Follow</h4>
                         <div class="social">
                            <a href="#" class="fab fa-twitter hvr-pulse"></a>
                            <a href="#" class="fab fa-pinterest hvr-pulse"></a>
                            <a href="#" class="fab fa-facebook-f hvr-pulse"></a>
                            <a href="#" class="fab fa-youtube "></a>
                        </div>
                     </div> /.single-contact-info -->
                 </div><!-- /.contact-info -->
             </div><!-- /.col-md-4 -->
         </div><!-- /.row -->
     </div>
