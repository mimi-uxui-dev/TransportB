<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        
        $to = "contact@transbelimour.com"; 
         

        $from = $_POST['email']; 
        
        $nom = $_POST['nom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $des = $_POST['des'];

        $subject = "Vous avez un e-mail de " . $nom;
        $msg = $_POST['msg'] ;
        
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
        $headers .= 'To: ' .$to   .  "\n"  ; 
        $headers .= 'from:'  .$email . "\n"; 


        if( mail($to, $subject, $msg, $headers)  ){
            echo '<script languag="javascript" >alert("Votre message a bien été envoyé ✔👍 ");</script>';
        }
        else{
            echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé ❌. Réessayer SVP 😊 ");</script>';
        }

        header('Location: index.html');


    }


?>