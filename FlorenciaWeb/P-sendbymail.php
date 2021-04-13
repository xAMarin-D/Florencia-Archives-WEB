

<!--   Metodo Envio Formulario       -->
<!--  Metodo en PHP para enviar el formulario de contacto a un correo electronico predefinido -->

<?php

    $name = $_POST['nombre'];
    $mail = $_POST['email'];
    $asunt = $_POST['asunto'];
    $msj = $_POST['mensaje'];

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Este mensaje fue enviado por: " . $name. "\n";
    $email_message .= "Su e-mail es: " . $mail . "\n";
    $email_message .= "Asunto: " . $asunt. "\n";
    $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
    $email_message .= "Enviado el :" .date('d/m/Y', time());
    
    $para = "ale.marincbz@outlook.es";
    $asunto = "Mensaje enviado desde la pagina web";
   
    mail($para, $asunto, utf8_decode($email_message), $header);
    
    header("Location:P-Contacto.php");
    
    

?>