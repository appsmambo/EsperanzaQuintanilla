<?php
$destinatario = 'mariosaenzb@gmail.com';
$asunto = 'Nuevo contacto desde la web';
$cuerpo = '
<html>
<body>
<h1>Contacto desde la web</h1>
<p>
Nombre: ' . $_POST['name'] . '<br>
Email: ' . $_POST['email'] . '<br>
Teléfono: ' . $_POST['telefono'] . '<br>
Mensaje: ' . $_POST['comments'] . '<br>
</p>
</body>
</html>
';

//para el envio en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//direccion del remitente
$headers .= "From: Web <informes@esperanzaquintanilla.com>\r\n";

//direccion de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";

return mail($destinatario,$asunto,$cuerpo,$headers);
