<?php
     $destinatario = 'daryl3lazo@gmail.com';
     //esto es al correo al que se enviara el mensaje
     $nombre = $_POST['nombre'];
     $asunto = $_POST['asunto'];
     $mensaje = $_POST['mensaje'];
     $email = $_POST['email'];

     $header = "Enviado desde la pagina web de Daryl N. Lazo Madge";
     $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>