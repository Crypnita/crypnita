<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "hairo2004.leon@gmail.com";
    $subject = "Nuevo mensaje de contacto desde tu Landing Page";
    
    $body = "Nombre: $firstName $lastName\n";
    $body .= "Correo Electrónico: $email\n";
    $body .= "Mensaje: \n$message";
    
    $headers = "From: crypnita.free.nf\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Intenta nuevamente.";
    }
}
?>
