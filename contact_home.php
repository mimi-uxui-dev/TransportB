<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
        
        //   $to = "contact@transbelimour.com"; 
        $to = "info@comfex.org"; 

        $from = $_POST['email']; 
        
        $nom = $_POST['nom'];
        $tel = $_POST['telephone'];
        $email = $_POST['email'];

        $subject = "vous avez un e-mail de " . $nom;
        $msg = $nom . " a rejoint votre newsletter, voici ses information de contact: \n Email: " . $email . "\n Téléphone: " .$tel ;
        
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
        $headers .= 'to: ' .$to   .  "\n"  ; 
        $headers .= 'from:'  .$email . "\n";




        if( mail($to, $subject, $msg, $headers)  )
        {
            echo '<script> 
                alert("Votre message a bien été envoyé ✔👍"); 
            </script>';
        }
        else // Non envoyé
        {
            echo '<script> alert("Votre message n\'a pas pu être envoyé ❌. Réessayer SVP 😊 "); </script>';
        }

        header('Location: index.html');

        
    }


?>