




<?php
       // controlli
       $error = false;
       if(!isset($_POST['name']) || empty($_POST['name'])){
           $error = true;
       }
       if(!isset($_POST['email']) || empty($_POST['email'])){
           $error = true;
       }
       if(!isset($_POST['message']) || empty($_POST['message'])){
           $error = true;
       }

       if($error){
           $errore = "alcuni campi obbligatori non sono stati compilati";
           header("location:". $_SERVER['HTTP_REFERER']."?errore=".$errore."#formContatti");
           exit();
       }

       // $result = mail ("info@mrwolfdesigner.com", $_POST['object'], $_POST['message'],  "FROM: $_POST[email]");
       if($result)
       echo "Email inviata con successo";
       else
       echo "Problemi nell'invio dell'email";

      header("location:". $_SERVER['HTTP_REFERER']."#formContatti");





?>
 <!-- http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['HTTP_REFERER'];?>#formContatti -->
