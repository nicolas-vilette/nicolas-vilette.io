<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Cv'; 
    $to = 'nakillo@hotmail.fr'; 
    $subject = 'CV réponse';
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    if ($_POST['submit']) {                 
        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Votre mail  à bien était envoyé!</p>';
    } else { 
        echo '<p>Quelque choses ne va pas, reéssayer s"'"il vous plais.</p>'; 
    } 
    }
?>
